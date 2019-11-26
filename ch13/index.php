<?php


try {
  $dsn = 'mysql:host=127.0.0.1;dbname=todos';
  $user = 'root';
  $password = getenv('MYSQL_PASSWORD');

  $pdo = new PDO($dsn, $user, $password);
} catch(PDOException $e) {
  die('could not connect.' . $e->getMessage());
}

$statement = $pdo->prepare("SELECT * FROM mytodos");

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results);


require 'index.view.php';
