<?php
    function getallMovies(){
        require_once "./connectDB.php";
        connectDb();
        $sql = "SELECT * FROM movies";

        try {
            $statement = $conn -> prepare($sql);
            $statement -> execute();
            $dataMovies = $statement -> fetchALL(PDO::FETCH_ASSOC);

            // echo "<pre>";
            // print_r($dataMovies);
            // // echo json_encode($dataAll); //api
            // echo"</pre>";
        } catch (Exception $exp) {
            echo $exp -> getMessage()."<br>";
            echo "File: ". $exp -> getFile()."<br>";
            echo "Line: ". $exp -> getLine(); 
        }
        return $dataMovies;
    }
    ?>