<?php

class DownloadableSongLibrary extends SongLibraryDecorator
{
    private $song_library;

    public function __construct(SongLibrary $song_library_in)
    {
        $this->song_library = $song_library_in;
    }

    public function addSong(Song $song)
    {
        if (!($song instanceof DownloadableSong)) {
            $song = new DownloadableSong($this, $song);
        }
    }

    public function getSong(Song $song)
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
