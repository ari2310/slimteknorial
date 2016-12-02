<?php
require 'vendor/autoload.php';
require 'libs/NotORM.php'; 
//membuat dan mengkonfigurasi slim app
$app = new \Slim\app;
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'slimteknorialdb';
$dbmethod = 'mysql:dbname=';

$dsn = $dbmethod.$dbname;
$pdo = new PDO($dsn, $dbuser, $dbpass);
$db  = new NotORM($pdo);
?>