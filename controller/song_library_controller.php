<?php

class SongLibraryController extends Controller
{

  public function index()
  {
    $song = new BaseSong("Hello", "Goodybyte", "The Beatles", 99, "Rock/Indie" );
    $song_array = array($song);

    $song_library = new LocalSongLibrary($song_array);

    $this->registry->template->songs = $song_library->getAllSongs();

    $this->registry->template->show('index');
  }

  public function show()
  {
    $this->registry->template->show('show');
  }

}
