<?php
    require_once "../config.php";

    unset($_SESSION['user']);
    echo "<script>window.location='login.php';</script>";
?>