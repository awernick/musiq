  <body>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Time</th>
          <th>Artist</th>
          <th>Genre</th>
          <th>Plays</th>
        </tr>
      </thead>
      <tbody>
      <?php if(count($songs) != 0) : ?>
        <?php foreach ($songs as $song) : ?>
          <tr>
            <td> <?= $song->getTitle() ?></td>
            <td> <?= $song->getDuration() ?></td>
            <td> <?= $song->getArtist() ?></td>
            <td> <?= $song->getGenre() ?></td>
            <td> <?= $song->getNumberOfPlays() ?></td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
      </tbody>
    </table>
  </body>
</html>
