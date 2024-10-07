<?php
    require '../../config.php';

    if (isset($_SESSION['user'])) {
        if (time() - $_SESSION['login_time'] > 86400) {
            echo "<script>window.location='" . base_url() . "admin/logout.php';</script>";
        }

        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

        function deleteImgFile($con, $path, $name, $table, $id) {
            $query = mysqli_query($con, "SELECT $name FROM $table WHERE id = $id LIMIT 1") or die (mysqli_error($con));
            $row = mysqli_fetch_array($query);
            $dir = "../../storage/".$path."/";
            unlink($dir.$row[$name]);
            return;
        }

        $id = $_POST['id'];
        $source = $_POST['source'];

        if (isset($id) && isset($source)) {
            if ($source == 'trip') {
                deleteImgFile($con, $source, 'file', 'tbl_trip', $id);
                mysqli_query($con, "DELETE FROM tbl_trip WHERE id = $id") or die (mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Deleted!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location='".base_url()."admin/opentrip.php';
                                }
                            });
                        });
                    </script>";
            } else {
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Unable to delete!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location='".base_url()."admin/dashboard.php';
                                }
                            });
                        });
                    </script>";
            }
        } else {
            echo "<script>window.location='".base_url()."admin/dashboard.php';</script>";
        }
    } else {
        echo "<script>window.location='" . base_url() . "admin/login.php';</script>";
    }
?>