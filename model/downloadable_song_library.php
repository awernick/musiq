<?php

class Model_DownloadableSongLibrary extends Model_SongLibraryDecorator
{
    private $song_library;


    public function __construct(Model_SongLibrary $song_library_in)
    {
        $this->song_library = $song_library_in;
    }

    public function addSong(Model_Song $song)
    {
        if (!($song instanceof Model_DownloadableSong)) {
            $song = new Model_DownloadableSong($this, $song);
        }
        else
        {
          this
        }
        $song->setPrice(3);
    }

    public function getSong(Model_Song $song)
    {
        return $this->song_library->getSong($song);
    }

    public function listSongs()
    {
      foreach($this->song_library as $song)
      {
        var_dump($song);
        echo "<br /><br/>";
      }
    }
}
