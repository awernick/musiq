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
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.2/slate/bootstrap.min.css"/>
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
          <a class="navbar-brand" href="index.php"><span>Musiq</span><img alt="Musiq Logo" src="/assets/images/musiq_logo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Purchased</a></li>
                <li class="divider"></li>
                <li><a href="#">Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </body>
