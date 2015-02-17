
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
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php if(count($songs) != 0) : ?>
        <?php foreach ($songs as $song) : ?>
          <?php echo $song->getID(); ?>
          <form id="form<?= $song->getID() ?>" method="get" action="index.php">
            <input type="hidden" name="controller" value="<?= $this->registry->controller ?>" >
            <input type="hidden" id="action" name="action" value="show" >
            <input type="hidden" name="id" value="<?= $song->getID() ?>" >
          </form>
          <form id="form<?= $song->getID() ?>Download" method="post" action="index.php?controller=ztunes_library&action=download">
            <input type="hidden" name="id" value="<?= $song->getID() ?>" >
          </form>
            <tr>
              <td> <?= $song->getTitle() ?> </td>
              <td> <?= $song->getArtist() ?></td>
              <td> <?= $song->getAlbum() ?></td>
              <td> <?= $song->getDuration() ?></td>
              <td> <?= $song->getGenre() ?></td>
              <td> <?= $song->getNumberOfPlays() ?></td>
              <td>
                <a onclick="$('#form<?= $song->getID() ?>').submit()"><i class="fa fa-pencil-square-o"></i> edit</a>&nbsp;&nbsp;
                <a onclick="$('#form<?= $song->getID() ?>Download').submit()"><i  class="fa fa-download"></i> download</a>
              </td>
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
