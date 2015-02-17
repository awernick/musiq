<?php

  function include_style_sheet_assets()
  {
    $dir = 'assets/stylesheets';

    foreach(scandir($dir) as $stylesheet)
    {
      echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"{$dir}/{$stylesheet}\"/>";
    }
  }

  function include_javascript_assets()
  {
    $dir = 'assets/scripts';

    foreach(scandir('assets/scripts') as $script)
    {
      echo "<script src=\"{$dir}/{$script}\"></script>";
    }
  }

  function provide_title($title_in = "")
  {
    global $title;
    $title = $title_in;
  }

  include_style_sheet_assets();
  include_javascript_assets();
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/cerulean/bootstrap.min.css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js" ></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </head>


  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><span>ZMAZON</span></a>
        </div>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <?php if(isset($_SESSION['username'])) :?>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $_SESSION['username'] ?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="index.php?">Profile</a></li>
                  <li class="divider"></li>
                  <li><a href="index.php?controller=session&action=destroy">Sign Out</a></li>
                <?php else : ?>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Guest <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="index.php?">Sign In</a></li>
                <?php endif; ?>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </body>
