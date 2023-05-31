<?php
    function getall_movies(){
        connectDb();
        $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        $stmt->execute();
        return $kq;
    }
?>