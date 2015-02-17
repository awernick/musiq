<?php

/**
 * Template for Controller classes.
 * All controller classes must define
 * an index function to be rendered
 * as a view.
 */
abstract class Controller {

  // Global key, value storage
  protected $registry;

  public function __construct($registry)
  {
    $this->registry = $registry;
  }

  /**
   * Entry point to the controller's view
   */
  abstract function index();

  public function redirect($controller, $action, $args)
  {
    $uri = explode('?', $_SERVER['REQUEST_URI'])[0];

    var_dump("Location: http://$_SERVER[HTTP_HOST]{$uri}?controller={$controller}&action={$action}");
    header("Location: http://$_SERVER[HTTP_HOST]{$uri}?controller={$controller}&action={$action}");
  }
}
