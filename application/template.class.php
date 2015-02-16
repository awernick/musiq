<?php

class Template {

  private $vars = array();
  private $registry;

  public function __construct($registry)
  {
    $this->registry = $registry;
  }

  public function __set($key, $value)
  {
    $this->vars[$key] = $value;
  }

  public function show($name)
  {
    $controller = $this->registry->controller . '/';

    if($controller == 'error404/' || $controller == 'index/')
    {
      $controller = '';
    }


    $path = __SITE_PATH . '/view'.'/'.$controller.$name.'.php';


    if(file_exists($path) == false)
    {
      throw new Error('Template not found in '. $path);
      return false;
    }

    foreach($this->vars as $key => $value)
    {
      $$key = $value;
    }

    include ($path);
  }
}
