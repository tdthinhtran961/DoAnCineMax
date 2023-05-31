<?php
    function getall_movies(){
        connectDb();
        $stmt = $conn->prepare("SELECT * FROM MyGuests");
        $stmt->execute();
        return $kq;
    }
?>