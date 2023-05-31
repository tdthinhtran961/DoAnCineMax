<?php
    function connectDb() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $myDB="cine_max_db";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
    connectDb();
?>