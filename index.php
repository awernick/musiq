<?php

  echo "Hello!";

  function autload($class) {
    $dir_struct = explode('_', $class);

    $folder = strtolower($dir_struct[0]);
    $class_name = from_camel_case($dir_struct[1]);

    $file = $folder.DIRECTORY_SEPARATOR.$class_name.".php";

    var_dump($file);

    if ( ! file_exists($file))
        return FALSE;

    echo "included ". $file."<br />";
    include $file;
  }

  function from_camel_case($input) {
    preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
    $ret = $matches[0];
    foreach ($ret as &$match) {
      $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
    }
    return implode('_', $ret);
  }

  spl_autoload_register('autload');

  $song_library = new Model_DownloadableSongLibrary(new Model_LocalSongLibrary());

  $song = new Model_DownloadableSong($song_library, new Model_BaseSong("Hello","Goodybyte","Rock/Indie", "The Beatles"), 99);

  echo $song->getTitle();

  if($song instanceof Model_DownloadableSong)
    echo $song->getPrice();

  echo "Array Start"."<br />";
  $array[] = $song;

  //var_dump($array);

  //$song_library = new Model_DownloadableSongLibrary(new Model_LocalSongLibrary($array));

  $song = new Model_BaseSong("Hello","Goodybyte","Rock/Indie", "The Beatles");

  $song_library->addSong($song);

  //var_dump($song_library);

  $song_library->listSongs();
?>
