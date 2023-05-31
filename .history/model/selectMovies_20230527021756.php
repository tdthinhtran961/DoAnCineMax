<?php
    function getall_movies(){
        // require_once "./connectDB.php";
        connectDb();
        $stmt = $conn->prepare("SELECT * FROM cine_max_db");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>