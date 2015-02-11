<?php

  interface Model_Song
  {

    public function getTitle();

    public function getArtist();

    public function getDuration();

    public function getGenre();

    public function setTitle($new_title);

    public function setArtist($new_artist);

    public function setDuration($new_duration);

    public function setGenre($new_genre);

    public function getBaseSong();

  }
