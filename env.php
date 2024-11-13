<?php
    $mode = 'dev'; // dev || prod

    if ($mode == 'dev') {
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'db_doctrip';
    } else if ($mode == 'prod') {
        $db_host = 'localhost';
        $db_user = 'dock3244_owner';
        $db_pass = '@TripWithUs';
        $db_name = 'dock3244_db_doctrip';
    } else {
        echo "Connection error!";
    }
?>
