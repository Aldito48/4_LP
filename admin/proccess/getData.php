<?php
    require "../../config.php";

    if (isset($_SESSION['user'])) {
        if (time() - $_SESSION['login_time'] > 86400) {
            echo "<script>window.location='" . base_url() . "admin/logout.php';</script>";
        }
        if (isset($_GET['id']) && isset($_GET['source'])) {
            if ($_GET['source'] == 'trip') {
                $id = $_GET['id'];
                $query = "SELECT * FROM tbl_trip WHERE id = '$id' LIMIT 1";
                $result = mysqli_query($con, $query);
                if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    echo json_encode($data);
                } else {
                    echo json_encode(['error' => 'Data not found']);
                }
            } else if ($_GET['source'] == 'itinerary') {
                $id = $_GET['id'];
                $query = "SELECT * FROM vw_itinerary_trip WHERE id = '$id' LIMIT 1";
                $result = mysqli_query($con, $query);
                if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    echo json_encode($data);
                } else {
                    echo json_encode(['error' => 'Data not found']);
                }
            } else if ($_GET['source'] == 'schedule') {
                $id = $_GET['id'];
                $query = "SELECT * FROM vw_schedule_trip WHERE id = '$id' LIMIT 1";
                $result = mysqli_query($con, $query);
                if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    echo json_encode($data);
                } else {
                    echo json_encode(['error' => 'Data not found']);
                }
            } else if ($_GET['source'] == 'slider') {
                $id = $_GET['id'];
                $query = "SELECT * FROM vw_slider_trip WHERE id = '$id' LIMIT 1";
                $result = mysqli_query($con, $query);
                if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    echo json_encode($data);
                } else {
                    echo json_encode(['error' => 'Data not found']);
                }
            } else if ($_GET['source'] == 'galery') {
                $id = $_GET['id'];
                $query = "SELECT * FROM tbl_galery WHERE id = '$id' LIMIT 1";
                $result = mysqli_query($con, $query);
                if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    echo json_encode($data);
                } else {
                    echo json_encode(['error' => 'Data not found']);
                }
            } else if ($_GET['source'] == 'mitra') {
                $id = $_GET['id'];
                $query = "SELECT * FROM tbl_mitra WHERE id = '$id' LIMIT 1";
                $result = mysqli_query($con, $query);
                if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    echo json_encode($data);
                } else {
                    echo json_encode(['error' => 'Data not found']);
                }
            }  else if ($_GET['source'] == 'review') {
                $id = $_GET['id'];
                $query = "SELECT * FROM tbl_review WHERE id = '$id' LIMIT 1";
                $result = mysqli_query($con, $query);
                if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    echo json_encode($data);
                } else {
                    echo json_encode(['error' => 'Data not found']);
                }
            } else if ($_GET['source'] == 'medsos') {
                $id = $_GET['id'];
                $query = "SELECT * FROM tbl_sosmed WHERE id = '$id' LIMIT 1";
                $result = mysqli_query($con, $query);
                if ($result) {
                    $data = mysqli_fetch_assoc($result);
                    echo json_encode($data);
                } else {
                    echo json_encode(['error' => 'Data not found']);
                }
            } else {
                echo "<script>window.location='".base_url()."admin/dashboard.php';</script>";
            }
        } else {
            echo "<script>window.location='".base_url()."admin/dashboard.php';</script>";
        }
    } else {
        echo "<script>window.location='".base_url()."admin/login.php';</script>";
    }
?>