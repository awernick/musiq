<?php

class BaseSong implements Song
{
    private $id;
    private $title;
    private $album;
    private $artist;
    private $duration;
    private $genre;
    private $plays;


    public function __construct($title = "", $album = "", $artist = "", $duration = 0, $genre = "", $plays = 0)
    {
        $this->title = $title;
        $this->album = $album;
        $this->artist = $artist;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->plays = $plays;
    }


    protected function played()
    {
      $song_plays++;
    }

    public function getID()
    {
      return $this->id;
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function getArtist()
    {
      return $this->artist;
    }

    public function getAlbum()
    {
      return $this->album;
    }

    public function getDuration()
    {
      return gmdate('i:s', $this->duration);
    }

    public function getGenre()
    {
      return $this->genre;
    }

    public function setID($id)
    {
        $this->id = $id;
    }

    public function setTitle($new_title)
    {
      if(is_string($new_title))
        $this->title = $new_title;
    }

    public function setAlbum($album)
    {
      if(is_string($album))
        $this->album = $album;
    }

    public function setArtist($new_artist)
    {
      if(is_string($new_artist))
        $this->artist = $new_artist;
    }

    public function setDuration($new_duration)
    {
      if(is_int($new_duration) and $new_duration > 0)
        $this->duration = $new_duration;
    }

    public function setGenre($new_genre)
    {
      if(is_string($new_genre))
        $this->genre = $new_genre;
    }

    public function getNumberOfPlays()
    {
      return $this->plays;
    }

    public function getBaseSong()
    {
      return new self($title, $artist, $duration, $genre, $plays);
    }
}
