<?php

  class DownloadableSong extends SongDecorator
  {
    private $price;

    public function __constructor(Song $song, $price)
    {
      parent::_construct($song);
      setPrice($price);
    }
    
    public function getPrice()
    {
      return $price;
    }

    /**
     * Sets the downloadable song's price.
     *
     * @param int $new_price the song's new price in cents.
     */
    public function setPrice($new_price)
    {
      if(is_int($new_price))
        $this->price = $new_price;
    }
  }
