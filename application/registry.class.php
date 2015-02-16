<?php

class Registry
{
  private $variables = array();


  public function __set($index, $value)
  {
    $this->variables[$index] = $value;
  }

  public function __get($index)
  {
    return $this->variables[$index];
  }
}
