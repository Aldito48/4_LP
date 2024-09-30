<?php
    require_once "../config.php";

    unset($_SESSION['user']);
    echo "<script>window.location='" . base_url() . "admin/login.php';</script>";
?>