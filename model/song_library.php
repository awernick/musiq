<?php

  interface SongLibrary
  {

    public function getAllSongs();

    public function hasSong(Song $song);

    public function getSong(Song $song);

    public function listSongs();

    public function addSong(Song $song);

    public function deleteSong();

    public function getSongLocation();

  }
