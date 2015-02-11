<?php

  class AlanTunesDownloadableSong extends SongDecorator
  {
    private $location;


    public function __constructor(Song $song, $new_location)
    {
      parent::_construct($song);
      setLocation($new_location);
    }
    
    public function setLocation($new_location)
    {
      $this->location = $new_location;
    }

    public function getLocation()
    {
      return $this->location;
    }

  }
