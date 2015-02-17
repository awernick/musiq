<body>

  <form method="post" action="index.php?controller=<?= $this->registry->controller ?>&amp;action=update">
      <input type="hidden" name="id" value="<?=$song->getID()?>">
      <h3>Title: <input type="text" name="song_attrs[title]" value="<?= $song->getTitle() ?>" > </h3>
      <h3>Album: <input type="text" name="song_attrs[album]" value="<?= $song->getAlbum() ?>" > </h3>
      <h3>Artist: <input type="text" name="song_attrs[artist]" value="<?= $song->getArtist() ?>" > </h3>
      <h3>Genre: <input type="text" name="song_attrs[genre]" value="<?= $song->getGenre() ?>" > </h3>
      <input type="submit" value="Update">
  </form>

  <form method="post" action="index.php?controller=<?= $this->registry->controller ?>&amp;action=destroy">
    <input type="hidden" name="id" value="<?=$song->getID()?>">
    <input type="submit" value="Delete">
  </form>
</body>
</html>
