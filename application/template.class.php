<?php

class Template {

  private $vars = array();


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
    $path = __SITE_PATH . '/view'.'/'.$name.'.php';

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
