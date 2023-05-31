<?php
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    include_once('../BookingTicketApp/config/db.php');
    include_once('../BookingTicketApp/model/movies.php')

    $db = new db();
    $connect = $db->connect();
    $
?>