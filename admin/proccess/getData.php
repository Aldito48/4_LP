<?php
    require "../../config.php";

    if (isset($_SESSION['user'])) {
        if (time() - $_SESSION['login_time'] > 86400) {
            echo "<script>window.location='" . base_url() . "admin/logout.php';</script>";
        }
        if (isset($_GET['id']) && isset($_GET['source'])) {
            if ($_GET['source'] == 'trip') {
                $id = $_GET['id'];
                $query = "SELECT * FROM tbl_trip WHERE id = '$id'";
                $result = mysqli_query($con, $query);
                if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    echo json_encode($data);
                } else {
                    echo json_encode(['error' => 'Data not found']);
                }
            }
        } else {
            echo "<script>window.location='".base_url()."admin/dashboard.php';</script>";
        }
    } else {
        echo "<script>window.location='".base_url()."admin/login.php';</script>";
    }
?>