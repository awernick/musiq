<?php

  abstract class SongLibraryDecorator implements SongLibrary
  {

    protected $song_library;

    public function __construct(SongLibrary $song_library)
    {
      $this->song_library = $song_library;
    }

    public function hasSong($id)
    {

    }

    public function updateSong($song_id, $song_attrs)
    {
      return $this->song_library->updateSong($song_id, $song_attrs);
    }

    public function getSong($id)
    {
      return $this->song_library->getSong($id);
    }

    public function listSongs()
    {
      foreach($this->song_library as $song)
      {
        var_dump($song);
        echo "<br /><br/>";
      }
    }

    public function addSong(Song $song)
    {
      $this->song_library->addSong($song);
    }

    public function deleteSong($id)
    {
      $this->song_library->deleteSong($id);
    }

    public function getSongLocation()
    {

    }

    public function update()
    {
      $this->song_library->update();
    }

    public function getAllSongs()
    {
      return $this->song_library->getAllSongs();
    }

    public function find($key, $value)
    {
        return $this->song_library->find($key, $value);
    }

    /**
     * [findById description]
     * @param [type] $id [description]
     */
    public function findById($id)
    {
      return $this->song_library->findById($id);
    }

    /**
     * [findByTitle description]
     * @param [type] $title [description]
     */
    public function findByTitle($title)
    {
      return $this->song_library->findByTitle($title);
    }

    /**
     * [findByArtist description]
     * @param [type] $artist [description]
     */
    public function findByArtist($artist)
    {
      return $this->song_library->findByArtist($artist);
    }

    /**
     * [findByGenre description]
     */
    public function findByGenre($genre)
    {
      return $this->song_library->findByGenre($genre);
    }

    /**
     * [findByAlbum description]
     */
    public function findByAlbum($album)
    {
      return $this->song_library->findByAlbum($album);
    }
  }
