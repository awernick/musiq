<?php

  interface Song
  {
    public function getID();

    public function getTitle();

    public function getAlbum();

    public function getArtist();

    public function getDuration();

    public function getGenre();

    public function setID($id);

    public function setTitle($new_title);

    public function setArtist($new_artist);

    public function setDuration($new_duration);

    public function setGenre($new_genre);

    public function getBaseSong();

  }
