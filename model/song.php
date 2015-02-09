<?php

namespace model;

class Song
{
    private $title;
    private $artist;
    private $duration;
    private $genre;
    private $plays;


    protected function __construct($song_title = "", $song_artist = "", $song_duration = 0, $song_genre = "", $song_plays = 0)
    {
        $this->title = $song_title;
        $this->artist = $artist;
        $this->duration = $song_duration;
        $this->genre = $song_genre;
        $this->plays = $song_plays;
    }
}
