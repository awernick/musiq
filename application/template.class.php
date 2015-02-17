<?php

/**
 * Handles view rendering and variable dispatching
 * from the controller to the desired view.
 */
class Template {

  private $vars = array();
  private $registry;

  public function __construct($registry)
  {
    $this->registry = $registry;
  }

  /**
   * Magic method to set variables used in
   * the view. These values are accessible
   * only in the current rendered view.
   *
   * @param $key   variable's name
   * @param $value variable's value
   */
  public function __set($key, $value)
  {
    $this->vars[$key] = $value;
  }

  /**
   * Load and render the desired
   * controller/action view or redirect
   * to a 404 if the view does not exist.
   *
   * @param  string $name view for desired action
   * @return boolean  only returns false if the
   *                  view does not exist.
   */
  public function show($name)
  {
    $controller = $this->registry->controller . '/';

    /* Route to correct page if controller is missing or invalid */
    if($controller == 'error404/' || $controller == 'index/')
    {
      $controller = '';
    }

    /* Set the path to the correct view class */
    $path = __SITE_PATH . '/view'.'/'.$controller.$name.'.php';

    include(__SITE_PATH . '/view'.'/'.$controller.'header.php');

    // var_dump($path);
    /* Check that the class exists, throw Error otherwise */
    if(file_exists($path) == false)
    {
      throw new Error('Template not found in '. $path);
      return false;
    }

    /* Load the variables needed in the view */
    foreach($this->vars as $key => $value)
    {
      $$key = $value;
    }

    /* Include the view and render it */
    include ($path);
  }
}
