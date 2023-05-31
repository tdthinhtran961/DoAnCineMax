<?php
//connect db by PDO
class db{

  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $myDb = "cine_max_db";

  public function connect(){
    $this->conn = null;
    try {
      $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->myDb."", $this->username, $this->password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "kết nối thành công";
    } catch (PDOException $e) {
      echo "kết nối thất bại: " . $e->getMessage();
    }
  }
}


?>