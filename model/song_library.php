<?php

  interface SongLibrary
  {

    public function getAllSongs();

    public function hasSong($id);

    public function getSong($id);

    public function listSongs();

    public function addSong(Song $song);

    public function deleteSong($id);

    public function getSongLocation();

    public function updateSong($song_id, $song_attrs);

    public function update();

    public function find($key, $value);

    /**
     * [findById description]
     * @param [type] $id [description]
     */
    public function findById($id);


    /**
     * [findByTitle description]
     * @param [type] $title [description]
     */
    public function findByTitle($title);


    /**
     * [findByArtist description]
     * @param [type] $artist [description]
     */
    public function findByArtist($artist);


    /**
     * [findByGenre description]
     */
    public function findByGenre($genre);


    /**
     * [findByAlbum description]
     */
    public function findByAlbum($album);


  }
