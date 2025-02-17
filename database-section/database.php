<?php

$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'tpride_test';
$password = 'Pray2God!';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
  // create PDO Instance
  $pdo = new PDO($dsn, $username, $password);

  // SET PDO TO THROW EXCEPTIONS ON ERROR
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // Fetch as Associate Array
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  // if there is an error, catch it here
  echo 'Connection Failed: ' . $e->getMessage();
}
