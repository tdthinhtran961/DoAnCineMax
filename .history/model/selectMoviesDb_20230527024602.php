<?php
    require_once "./connectDB.php";
    $sql = "SELECT * FROM movies";

    try {
        $statement = $conn -> prepare($sql);
        $statement -> execute();
        $dataAll = $statement -> fetchALL(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($dataAll);
        // echo json_encode($dataAll); //api
        echo"</pre>";
    } catch (Exception $exp) {
        echo $exp -> getMessage()."<br>";
        echo "File: ". $exp -> getFile()."<br>";
        echo "Line: ". $exp -> getLine(); 
    }
?>