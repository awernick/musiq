<?php

class IndexController extends Controller
{
  public function index()
  {
    $this->registry->template->show('index');
  }
}
