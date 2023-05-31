<?php
    const _HOST = "localhost";
    const _DB = "cine_max_db";
    const _USER = "root";
    const _PASS = "";
    function connectDb(){
        try {
            if (class_exists("PDO")) {
                $dsn = "mysql:dbname="._DB.";host="._HOST;
                $options = [
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ];
                $conn = new PDO($dsn,_USER,_PASS,$options);
                
                // if ($conn) {
                //     echo 'kết nối thành công';
                // }
                
            }
        } catch (Exception $exception) { 
            echo '<div style="color:red; padding: 5px 15px; border: 1px solid red;">';
            echo $exception -> getMessage()."<br>";
            echo '</div';
            die();
        }
        return
    }
?>