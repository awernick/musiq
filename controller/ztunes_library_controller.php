<?php

class ZtunesLibraryController extends Controller {

    private $song_library;

    public function __construct($registry)
    {
        parent::__construct($registry);

        $file_path = __SITE_PATH.'/assets/library/'.from_camel_case(get_class($this)).'.txt';

        if(isset($_SESSION['ztunes_library']))
          $this->song_library = $_SESSION['ztunes_library'];

        else
        {
          $this->song_library = new ZtunesSongLibrary(LocalSongLibrary::loadFromFile($file_path));
          $_SESSION['ztunes_library'] = $this->song_library;
        }

    }

    public function index()
    {
      // $song = new BaseSong("Hello","Revolver", "The Beatles", 99, "Rock/Indie");
      // $this->song_library->addSong($song);
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
      $this->redirect($this->registry->controller,'index');
    }

    public function download()
    {
      var_dump($_POST['id']);
      $song_id = empty($_POST['id']) ? -1 : $_POST['id'];
      var_dump($song_id);
      $song = clone $this->song_library->getSong($song_id);

      var_dump($song);

      $local_library = $_SESSION['local_library'];

      if(isset($local_library) == false || $song == false)
        $this->redirect('sessions','login');

      $local_library->addSong($song);
      $this->redirect('song_library', 'index');
    }

    public function __destruct()
    {
      $this->song_library->update();
    }
}
