<?php
    date_default_timezone_set('Asia/Jakarta');
    session_start();

    $host = 'localhost';
    $user = 'root';     // dev: root       || prod: dock3244_owner
    $pass = '';         // dev:            || prod: @TripWithUs
    $db = 'db_doctrip'; // dev: db_doctrip || prod: dock3244_db_doctrip
    $con = mysqli_connect($host, $user, $pass, $db);

    mysqli_select_db($con, $db);
?>
