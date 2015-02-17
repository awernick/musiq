<?php

/** Routes to the index page **/
class IndexController extends Controller
{
  public function index()
  {
    $this->registry->template->show('index');
  }
}
