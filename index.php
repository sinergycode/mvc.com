<?php // index.php
  require 'libs/Bootstrap.php'; // класс начальной загрузки
  require 'libs/Controller.php'; // класс главного контролер
  require 'libs/model.php';
  require 'libs/View.php'; // это вид
  require 'libs/Database.php'; // подключаем базу данных
  require 'libs/Session.php';
  // require 'libs/hash/Hash.php';
  require 'config/paths.php';
  require 'config/database.php';
  // require 'config/constants.php';

  
  $app = new Bootstrap(); // начальная загрузка – вызов контролера с методом и парам
?>