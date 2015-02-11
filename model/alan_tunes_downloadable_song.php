<?php

  class Model_AlanTunesDownloadableSong extends Model_DownloadableSong
  {
    private $location;


    public function __construct(Model_DownloadableSong $song, $new_location= "\\")
    {
      parent::__construct($song);
      self::setLocation($new_location);
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
