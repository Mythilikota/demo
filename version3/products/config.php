<?php
  // Just line const in c++ / c, this is used to create
  // constats in php. Here four constants are defined.
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'products');

  // Conncting to the mysql DB_DATABASE, mysqli_connect is
  // an alias new based constructor.
  // mysqli_connect( serverUrl, username, password, database ).
  $db = mysqli_connect(
    DB_SERVER, DB_USERNAME,
    DB_PASSWORD, DB_DATABASE);
?>
