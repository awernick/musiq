<?php

class Router
{
  private $registry;

  private $path;

  public $file;

  public $controller;

  public $action;


  public function __construct($registry)
  {
    $this->registry = $registry;
  }


  public function setPath($path)
  {
    if (is_dir($path) == false)
    {
      throw new Exception ('Invalid controller path: `' . $path . '`');
    }
    /*** set the path ***/
     $this->path = $path;
  }


  public function loader()
  {

    $this->loadController();


    if(is_readable($this->file) == false)
    {
      $this->file = $this->path.'/error404.php';
      $this->controller = 'error404';
    }

    include $this->file;
    $this->registry->controller = $this->controller;
    $this->controller = from_snake_case($this->controller);
    $class = $this->controller.'Controller';
    $controller = new $class($this->registry);

    if(is_callable(array($controller, $this->action)) == false)
    {
      $action = 'index';
    }

    else
    {
      $action = $this->action;
    }

    $controller->$action();

  }


  public function loadController()
  {
    /* Set controller specified, route to index otherwise */
    $this->controller =  empty($_GET['controller']) ? 'index' : $_GET['controller'];

    /* Call action specified, else call index action */
    $this->action = empty( $_GET['action'] ) ? 'index' : $_GET['action'];

    $this->file = $this->path.'/'.$this->controller.'_controller.php';
  }
}
