<?php
    function getall_movies(){
        connectDb();
        $stmt = $conn->prepare("SELECT * FROM cine_max_db");
        $stmt->execute();
        return $kq;
    }
?>