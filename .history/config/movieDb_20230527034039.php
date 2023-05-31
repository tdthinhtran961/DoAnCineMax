<?php
//connect db by PDO
$servername = "localhost";
$username = "root";
$password = "";
$myDb = "cine_max_db"

try {
  $conn = new PDO("mysql:host=".$this->servername.";dbname=cine_max_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
