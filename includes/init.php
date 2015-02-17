<?php

/*** include the controller class ***/
include __SITE_PATH . '/application/' . 'controller.class.php';

/*** include the registry class ***/
include __SITE_PATH . '/application/' . 'registry.class.php';

/*** include the router class ***/
include __SITE_PATH . '/application/' . 'router.class.php';

/*** include the template class ***/
include __SITE_PATH . '/application/' . 'template.class.php';

/*** auto load model classes ***/
function __autoload($class_name) {

   $filename = from_camel_case($class_name) . '.php';
   $file = __SITE_PATH . '/model/' . $filename;
   if (file_exists($file) == false)
   {
       return false;
   }
 include ($file);
}

function from_camel_case($input) {
  preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
  $ret = $matches[0];
  foreach ($ret as &$match) {
    $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
  }
  return implode('_', $ret);
}


function from_snake_case($val) {
  return str_replace(' ', '', ucwords(str_replace('_', ' ', $val)));
}


session_name('Private');
session_start();

/*** a new registry object ***/
$registry = new registry;
