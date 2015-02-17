<?php

/** Error404 dispatcher **/
class error404Controller extends Controller {

  public function index()
  {
    $this->registry->template->show('error404');
  }
}
