<?php

class LocalSongLibraryController
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
    $songs =
  }

  function show()
  {
    $song
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
