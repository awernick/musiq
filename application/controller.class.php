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
}
