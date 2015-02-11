<?php

  abstract class SongDecorator implements Song
  {

    protected $song;

    public function __constructor(Song $song_in)
    {
      $this->song = $song_in;
    }

    public function getTitle()
    {
      return $this->song->getTitle();
    }

    public function getArtist()
    {
      return $this->song->getArtist();
    }

    public function getDuration()
    {
      return $this->song->getDuration();
    }

    public function getGenre()
    {
      return $this->song->getGenre();
    }

    public function setTitle($new_title)
    {
      $this->song->setTitle($new_title);
    }

    public function setArtist($new_artist)
    {
      $this->song->setArtist($new_artist);
    }

    public function setDuration($new_duration)
    {
      $this->song->setDuration($new_duration);
    }

    public function setGenre($new_genre)
    {
      $this->song->setGenre($new_genre);
    }

    public function getBaseSong()
    {
      return $this->song->getBaseSong();
    }
    
  }
