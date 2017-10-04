<?php // libs/database.php
  
  define('DB_TYPE', 'mysql');
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'mvc');
  define('DB_USER', 'root');
  define('DB_PASS', '');

  class Database extends PDO {
   public function __construct() {
    parent::__construct('mysql:host=localhost;dbname=mvc', 'root', '');
   }
  }


?>