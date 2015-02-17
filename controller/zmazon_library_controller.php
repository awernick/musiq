<?php

class ZmazonLibraryController extends Controller {

    private $song_library;

    public function __construct($registry)
    {
        parent::__construct($registry);

        $file_path = __SITE_PATH.'/assets/library/'.from_camel_case(get_class($this)).'.txt';

        if(isset($_SESSION['zmazon_library']))
          $this->song_library = $_SESSION['zmazon_library'];

        else
        {
          $this->song_library = new ZmazonSongLibrary(LocalSongLibrary::loadFromFile($file_path));
          $_SESSION['zmazon_library'] = $this->song_library;
        }

    }

    public function index()
    {
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

    public function destroy()
    {
      $song_id = empty($_POST['id']) ? -1 : $_POST['id'];
      $this->song_library->deleteSong($song_id);
      $this->redirect($this->registry->controller,'index');
    }

    public function update()
    {
      $song_id = empty($_POST['id']) ? -1 : $_POST['id'];
      $song_attrs = empty($_POST['song_attrs']) ? array() : $_POST['song_attrs'];
      $this->song_library->updateSong($song_id, $song_attrs);
      //$this->redirect($this->registry->controller,'index');
    }

    public function __destruct()
    {
      $this->song_library->update();
    }
}
