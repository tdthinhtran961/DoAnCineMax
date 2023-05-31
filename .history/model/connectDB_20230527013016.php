<?php
    function connectDb(){
        $HOST = "localhost";
        $DB = "cine_max_db";
        $USER = "root";
        $PASS = "";
        try {
            if (class_exists("PDO")) {
                $dsn = "mysql:dbname=".$DB.";host=".$HOST;
                $options = [
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ];
                $conn = new PDO($dsn,$USER,$PASS,$options);
                
                if ($conn) {
                    echo 'kết nối thành công';
                }
                
            }
        } catch (Exception $exception) { 
            echo '<div style="color:red; padding: 5px 15px; border: 1px solid red;">';
            echo $exception -> getMessage()."<br>";
            echo '</div';
            die();
        }
        return $conn
    }
?>