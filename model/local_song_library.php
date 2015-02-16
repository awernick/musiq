<?php

class LocalSongLibrary implements SongLibrary
{
    private $song_array;

    public function __construct($song_array = array())
    {
        $this->song_array = array_filter($song_array, function($song) {
            return $song instanceof Song;
        });
    }

    public function listSongs()
    {
        foreach ($this->song_array as $song) {
            echo $song->getTitle()."<br />";
        }
    }

    public function addSong(Song $song)
    {
        $this->song_array[] = $song;
    }

    public function deleteSong()
    {

    }

    public function getSongLocation()
    {

    }

    public function hasSong(Song $song)
    {

    }

    public function getAllSongs()
    {
      return $this->song_array;
    }

    public function getSong(Song $song)
    {

    }
}
