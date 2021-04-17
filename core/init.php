<?php
session_start();

$un = 'demo';
$pw = 'demo';
$hn = 'localhost';
$db = 'iw';

$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/iw';

spl_autoload_register(function($class) {
  require_once 'classes/' . $class . '.php';
});
?>
