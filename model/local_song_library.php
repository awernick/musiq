<?php

class LocalSongLibrary implements SongLibrary
{
    private $song_array;
    private $song_index;

    public function __construct()
    {
        $this->song_array = array();
        $this->song_index = 0;
    }

    public function listSongs()
    {
        foreach ($this->song_array as $song) {
            echo $song->getTitle()."<br />";
        }
    }

    public function addSong(Song $song)
    {
        $this->song_index++;
        $this->song_array[$this->song_index] = $song;
    }

    public function deleteSong($id)
    {
      if(hasSong($id))
        unset($this->song_array[$id]);

      else
        return false;

    }

    public function getSongLocation()
    {

    }

    public function hasSong($id)
    {
      return isset($this->song_array[$id]);
    }

    public function find($key, $value)
    {
      if($key == 'id')
        return $this->getSong($value);

      else
        return false;
    }

    /**
     * [findById description]
     * @param [type] $id [description]
     */
    public function findById($id)
    {
      $this->find("id", $id);
    }

    /**
     * [findByTitle description]
     * @param [type] $title [description]
     */
    public function findByTitle($title)
    {
      $this->find("title", $title);
    }

    /**
     * [findByArtist description]
     * @param [type] $artist [description]
     */
    public function findByArtist($artist)
    {
      $this->find("artist", $artist);
    }

    /**
     * [findByGenre description]
     */
    public function findByGenre($genre)
    {
      $this->find("genre", $genre);
    }

    /**
     * [findByAlbum description]
     */
    public function findByAlbum($album)
    {
      $this->find("album", $album);
    }

    public function getAllSongs()
    {
      return $this->song_array;
    }

    public function getSong($id)
    {
      return isset($song_array[$id]) ? $song_array[$id] : false;
    }
}
