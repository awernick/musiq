<?php

class Model_LocalSongLibrary implements Model_SongLibrary
{
    private $songArray;

    public function __construct($songArrayIn = array())
    {
        $this->songArray = array_filter($songArrayIn, function($song) {
            return $song instanceof Model_Song;
        });
    }

    public function listSongs()
    {
        foreach ($this->song_array as $song) {
            echo $song->getTitle()."<br />";
        }
    }

    public function addSong(Model_Song $song)
    {
        $this->song_array[] = $song;
    }

    public function deleteSong()
    {

    }

    public function getSongLocation()
    {

    }

    public function hasSong(Model_Song $song)
    {

    }

    public function getSong(Model_Song $song)
    {

    }
}
