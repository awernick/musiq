<?php

class SessionController extends Controller {

  public function index()
  {
    $this->registry->template->show('login');
  }

  public function create()
  {
    $username = $_POST['username'];
    var_dump($username);
    $_SESSION['username'] = $username;
    $this->redirect('song_library','index');
  }

  public function destroy()
  {
    $_SESSION['username'] = null;
    $_SESSION['local_library'] = null;
    $this->redirect('song_library', 'index');
  }
}
