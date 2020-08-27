<?php 
  require 'database/connection.php';
  require 'classes/User.php';
  require 'classes/Post.php';
  require 'classes/Follow.php';

  global $pdo;

  session_start();

  $getFromU = new User($pdo);
  $getFromT = new Post($pdo);
  $getFromF = new Follow($pdo);

  define("BASE_URL", "http://localhost/connect/");

?>