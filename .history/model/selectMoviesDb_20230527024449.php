<?php
    require_once "./connectDB.php";
    $sql = "SELECT * FROM movies";
    $statement = $conn -> prepare($sql);
    $statement -> execute();
    $dataAll = $statement -> fetchALL(PDO::FETCH_ASSOC);
    echo "<pre>";
    while ($dataAll) {
        echo $dataAll['id'];
    }
    // echo json_encode($dataAll); //api
    echo"</pre>";
?>