<?php
class Movies{
    private $conn;

    public $id;
    public $title;
    public $genre;
    public $director;
    public $actor;
    public $relDate;
    public $image;
    //connect db
    public function __construct($db){
        $this->conn = $db;
    }
    //read db
    public function read(){
        $query = "SELECT * FROM movies as m ORDER BY m.id DESC";
        $query = "SELECT * FROM movies as m ORDER BY m.id DESC";
        $stmt = $this->conn->prepare($);
    }

}


?>