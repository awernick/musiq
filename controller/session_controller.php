<?php

/**
 *  Controller that handles Session creation
 *  and destruction.
 **/
class SessionController extends Controller {

  public function index()
  {
    $this->registry->template->show('login');
  }

  /** Process POST session creation request for the given username */
  public function create()
  {
    $username = $_POST['username'];
    var_dump($username);
    $_SESSION['username'] = $username;
    $this->redirect('song_library','index');
  }

  /** Destroy session for the current user */
  public function destroy()
  {
    $_SESSION['username'] = null;
    $_SESSION['local_library'] = null;
    $this->redirect('song_library', 'index');
  }
}
