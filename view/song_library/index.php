
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
        <form id="form" method="get" action="index.php">
          <input type="hidden" name="controller" value="index" />
        </form>
      <?php if(count($songs) != 0) : ?>
        <?php foreach ($songs as $song) : ?>
            <tr>
              <td class="song"> <?= $song->getTitle() ?> </a></td>
              <td> <?= $song->getArtist() ?></a></td>
              <td> <?= $song->getAlbum() ?></a></td>
              <td> <?= $song->getDuration() ?></td>
              <td> <?= $song->getGenre() ?></td>
              <td> <?= $song->getNumberOfPlays() ?></td>
            </tr>
          </a>
        <?php endforeach; ?>
      <?php endif; ?>
      </tbody>
    </table>
  </body>

  <script>
    $("tr").click(function(){
      $('<input>').attr({
          type: 'hidden',
          id: 'action',
          name: 'action',
          value: 'show'
        }).appendTo('#form');

        $('<input>').attr({
            type: 'hidden',
            id: 'song',
            name: 'song',
            value: $(this).children('.song').text()
          }).appendTo('#form');

        $('#form').submit();
      });
  </script>
</html>
