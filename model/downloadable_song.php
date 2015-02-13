<?php

class Model_DownloadableSong extends Model_SongDecorator
{
  private $price;
  private $library;

  public function __construct(Model_DownloadableSongLibrary $libraryIn, Model_Song $songIn, $priceIn = 0)
  {
      parent::__construct($songIn);

      $this->library = $libraryIn;
      $this->library->addSong($this);
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

  public function buy()
  {
    $this->library->buySong($this);
  }
}
