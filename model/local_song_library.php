<?php

class LocalSongLibrary implements SongLibrary
{
    private $song_array;
    private $song_index;
    private $file;

    public function __construct()
    {
        $this->song_array = array();
        $this->song_index = 0;
    }

    public static function loadFromFile($file_path = '')
    {
      if($file_path == '')
        $file_path = __SITE_PATH.'/assets/library/'.from_camel_case(get_called_class()).'.txt';

      $file = fopen($file_path, "w+");
      $song_library = unserialize(fread($file, filesize($file_path)));

      if($song_library == false)
        $song_library = new static();

      echo "<br /> FilePath: ".$file_path;

      $song_library->setFile($file_path);
      return $song_library;
    }

    public function setFile($file)
    {
      $this->file = $file;
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
      if($this->hasSong($id))
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
      return $this->find("id", $id);
    }

    /**
     * [findByTitle description]
     * @param [type] $title [description]
     */
    public function findByTitle($title)
    {
      return $this->find("title", $title);
    }

    /**
     * [findByArtist description]
     * @param [type] $artist [description]
     */
    public function findByArtist($artist)
    {
      return $this->find("artist", $artist);
    }

    /**
     * [findByGenre description]
     */
    public function findByGenre($genre)
    {
      return $this->find("genre", $genre);
    }

    /**
     * [findByAlbum description]
     */
    public function findByAlbum($album)
    {
      return $this->find("album", $album);
    }

    public function getAllSongs()
    {
      return $this->song_array;
    }

    public function getSong($id)
    {
      return isset($this->song_array[$id]) ? $this->song_array[$id] : false;
    }

    public function updateSong($song_id, $song_attrs)
    {
      $song = $this->getSong($song_id);

      if($song == false)
        return;
      else

      foreach($song_attrs as $attribute => $value)
      {
        $method = 'set'.ucwords($attribute);

        if(is_callable(array($song, $method)) == false)
        {
          echo "can't call";
          continue;
        }
        else
          $song->$method($value);
      }

      $this->song_array[$song_id] = $song;

    }

    public function update()
    {
      if(empty($this->file))
        return false;

      echo "<br /> File:".$this->file;
      $file = fopen($this->file, 'w+');
      fwrite($file, serialize($this));
    }
}
