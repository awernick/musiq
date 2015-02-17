<?php

/**
 * Simple key,value storage that persists
 * across views.
 */
class Registry
{
  private $variables = array();

  /**
   * Magic method to define and set
   * variable key, value pairs.
   *
   * @param $index variable name
   * @param $value variable value
   */
  public function __set($index, $value)
  {
    $this->variables[$index] = $value;
  }

  /**
   * Magic getter method for multiple
   * variable key,value pairs stored.
   *
   * @param  $index variable name
   * @return variable's stored value
   */
  public function __get($index)
  {
    return $this->variables[$index];
  }
}
