<?php

class BaseSong implements Song
{
    private $title;
    private $artist;
    private $duration;
    private $genre;
    private $plays;


    public function __construct($song_title = "", $song_artist = "", $song_duration = 0, $song_genre = "", $song_plays = 0)
    {
        $this->title = $song_title;
        $this->artist = $song_artist;
        $this->duration = $song_duration;
        $this->genre = $song_genre;
        $this->plays = $song_plays;
    }


    protected function played()
    {
      $song_plays++;
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function getArtist()
    {
      return $this->artist;
    }

    public function getDuration()
    {
      return gmdate('i:s', $this->duration);
    }

    public function getGenre()
    {
      return $this->genre;
    }

    public function setTitle($new_title)
    {
      if(is_string($new_title))
        $this->title = $new_title;
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
