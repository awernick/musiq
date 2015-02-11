<?php

  class Model_DownloadableSong extends Model_SongDecorator
  {
    private $price;

    public function __construct(Model_Song $song_in, $price_in = 0)
    {
      parent::__construct($song_in);
      $this->price = $price_in;
    }

    public function getPrice()
    {
      return $this->price;
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
