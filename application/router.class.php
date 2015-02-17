<?php

class Router
{
  // key, value storage
  private $registry;

  // path to controller file
  private $path;

  // controller class file
  private $file;

  // controller class
  private $controller;

  // action from controller
  private $action;


  public function __construct($registry)
  {
    $this->registry = $registry;
  }

  /**
   * Set the path to controller class file.
   *
   * @param string $path path to controller class
   */
  public function setPath($path)
  {
    if (is_dir($path) == false)
    {
      throw new Exception ('Invalid Controller path: `' . $path . '`');
    }

    /* set the path */
     $this->path = $path;
  }

  /**
   * Loads the specified controller
   * and routes to the desired action.
   */
  public function loader()
  {
    /* Find controller's file */
    $this->loadController();

    /* Check if the controller file is readable, 404 otherwise */
    if(is_readable($this->file) == false)
    {
      $this->file = $this->path.'/error404.php';
      $this->controller = 'error404';
    }

    /* Load the controller file */
    include $this->file;


    /* Set the controller as the current controller */
    $this->registry->controller = $this->controller;

    /* convert $_GET controller name to CamelCase */
    $controller_name = from_snake_case($this->controller);

    /* Fetch or instantiate controller class if it has been already */
    if(empty($this->registry->$controller_name))
    {

      $class = $controller_name.'Controller';

      /* Instantiate controller */
      $controller = new $class($this->registry);

      /* Store controller on the registry */
      $this->registry->$controller_name = $controller;
    }
    else
    {
      /* Fetch the controller from registry */
      $controller = $this->registry->$controller_name;
    }


    /* Route to index if controller cannot call the action */
    if(is_callable(array($controller, $this->action)) == false)
    {
      $action = 'index';
    }

    else
    {
      $action = $this->action;
    }

    /* Call the controller's action */
    $controller->$action();

  }

  /**
   * Load the controller to handle the HTTP request
   */
  private function loadController()
  {
    /* Set controller specified, route to index otherwise */
    $this->controller =  empty($_GET['controller']) ? 'index' : $_GET['controller'];

    /* Call action specified, else call index action */
    $this->action = empty( $_GET['action'] ) ? 'index' : $_GET['action'];

    /* Point to the correct controller class file */
    $this->file = $this->path.'/'.$this->controller.'_controller.php';
  }
}
