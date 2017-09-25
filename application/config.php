<?php

use Lib\Registry;

 define('PATH_SITE', $_SERVER['DOCUMENT_ROOT']);
 define('HOST', 'localhost');
 define('USER', 'user');
 define('PASSWORD', '1234');
 define('NAME_BD', 'museum');
 define ('DS', DIRECTORY_SEPARATOR);
 $mysqli = new mysqli(HOST, USER, PASSWORD,NAME_BD)or die("Невозможно установить соединение c базой данных".$mysqli->connect_errno());
 Registry::set('mysqli',$mysqli);
 $mysqli->query('SET names "utf8"');   //база устанавливаем кодировку данных в базе



?>