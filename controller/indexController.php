<?php

class indexController extends Controller {

  public function index()
  {
    $song = new BaseSong("Hello","Goodybyte", 99, "Rock/Indie", "The Beatles");
    $song_array = array($song);

    $song_library = new LocalSongLibrary($song_array);

    $this->registry->template->songs = $song_library->getAllSongs();

    $this->registry->template->show('index');
  }
}
