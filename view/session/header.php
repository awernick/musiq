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
  </body>
