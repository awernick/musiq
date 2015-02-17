<body>

  <h1> <?= $song->getTitle() ?> </h1>
  <form method="post" action="index.php?controller=<?= $this->registry->controller ?>&amp;action=destroy">
    <input type="hidden" name="id" value="<?=$song->getID()?>">
    <input type="submit" value="Delete">
  </form>
</body>
</html>
