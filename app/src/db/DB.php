<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Simplon\Mysql\PDOConnector;

$pdo = new PDOConnector(
  'db',
  'root',
  'example',
  'db'
);
$pdoConn = $pdo->connect('utf8',[]);
$dbConn = new Simplon\Mysql\Mysql($pdoConn);