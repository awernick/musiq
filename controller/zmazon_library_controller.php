<?php

class ZmazonLibraryController extends Controller {

    private $song_library;

    public function __construct($registry)
    {
        parent::__construct($registry);
        $this->song_library = new ZmazonSongLibrary(new LocalSongLibrary());
    }

    public function index()
    {
      $song = new BaseSong("Hello", "Goodybyte", "The Beatles", 99, "Rock/Indie" );

      $this->song_library->addSong($song);

      $this->registry->template->songs = $this->song_library->getAllSongs();

      $this->registry->template->show('index');
    }

    public function show()
    {
      $song_id = empty($_GET['id']) ? -1 : $_GET['id'];
      $song = $this->song_library->findById($song_id);
      $this->registry->template->song = $song;
      $this->registry->template->show('show');
    }
}
