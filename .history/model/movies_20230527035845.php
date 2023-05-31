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
    
    public function __construct($db){
        $this->conn = $db;
    }
    {
        
    }
}


?>