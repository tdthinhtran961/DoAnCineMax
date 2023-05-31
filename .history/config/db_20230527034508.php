<?php
//connect db by PDO
class db{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $myDb = "cine_max_db";
  
  try {
    $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->myDb."", $this->username, $this->password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "kết nối thành công";
  } catch (PDOException $e) {
    echo "kết nối thất bại: " . $e->getMessage();
  }
};
?>