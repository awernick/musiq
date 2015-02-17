
  <body>
    <h1 style="margin-left: 15px;"> Library </h1>
    <br />
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Artist</th>
          <th>Album</th>
          <th>Time</th>
          <th>Genre</th>
          <th>Plays</th>
        </tr>
      </thead>
      <tbody>
      <?php if(count($songs) != 0) : ?>
        <?php foreach ($songs as $song) : ?>
          <form id="form<?= $song->getID() ?>" method="get" action="index.php">
            <input type="hidden" name="controller" value="<?= $this->registry->controller ?>" >
            <input type="hidden" name="action" value="show" >
            <input type="hidden" name="id" value="<?= $song->getID() ?>" >
          </form>
            <tr>
              <td> <?= $song->getTitle() ?> </td>
              <td> <?= $song->getArtist() ?></td>
              <td> <?= $song->getAlbum() ?></td>
              <td> <?= $song->getDuration() ?></td>
              <td> <?= $song->getGenre() ?></td>
              <td> <?= $song->getNumberOfPlays() ?></td>
              <td> <a onclick="$('#form<?= $song->getID() ?>').submit()"> view </a> </td>
            </tr>
          </a>
        <?php endforeach; ?>
      <?php endif; ?>
      </tbody>
    </table>
  </body>

  <script>
  </script>
</html>
