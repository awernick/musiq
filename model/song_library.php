<?php

  interface SongLibrary
  {

    public function getAllSongs();

    public function hasSong($id);

    public function getSong($id);

    public function listSongs();

    public function addSong(Song $song);

    public function deleteSong($id);

    public function getSongLocation();

  }
