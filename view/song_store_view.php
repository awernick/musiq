<?php
  include('../header.php');
  provide_title("Song Library");
  $controller = new Controller_LocalSongLibraryController();
  $songs = $controller->index;
  ?>

  
