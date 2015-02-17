<?php

class Controller_LocalSongLibraryController
{

  $song_library;

  function __construct($song_library_in = "")
  {
    if($song_library_in != null)
      $this->song_library = $song_library_in;

    else
      $this->song_library_in = new Model_LocalSongLibrary;
  }

  function index()
  {
    return $this->song_library.getAllSongs();
  }

  function show()
  {

  }

  function edit()
  {

  }

  function delete()
  {

  }

  function update()
  {

  }
}
