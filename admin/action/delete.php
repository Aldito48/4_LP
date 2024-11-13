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
            $filePath = $dir.$row[$name];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            return;
        }

        function deleteImgChild($con, $path, $name, $table, $id) {
            $query = mysqli_query($con, "SELECT $name FROM $table WHERE id_trip = $id") or die(mysqli_error($con));
            $dir = "../../storage/".$path."/";
            while ($row = mysqli_fetch_array($query)) {
                $filePath = $dir.$row[$name];
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
            return;
        }

        $id = $_POST['id'];
        $source = $_POST['source'];

        if (isset($id) && isset($source)) {
            if ($source == 'trip') {
                deleteImgFile($con, $source, 'file', 'tbl_trip', $id);
                deleteImgChild($con, 'itinerary', 'image', 'tbl_itinerary', $id);
                deleteImgChild($con, 'slider', 'photo', 'tbl_slider', $id);
                mysqli_query($con, "DELETE FROM tbl_trip WHERE id = $id") or die (mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Deleted!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/opentrip.php';
                            });
                        });
                    </script>";
            } else if ($source == 'itinerary') {
                deleteImgFile($con, $source, 'image', 'tbl_itinerary', $id);
                mysqli_query($con, "DELETE FROM tbl_itinerary WHERE id = $id") or die (mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Deleted!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/itinerary.php';
                            });
                        });
                    </script>";
            } else if ($source == 'schedule') {
                mysqli_query($con, "DELETE FROM tbl_schedule WHERE id = $id") or die (mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Deleted!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/schedule.php';
                            });
                        });
                    </script>";
            } else if ($source == 'slider') {
                deleteImgFile($con, $source, 'photo', 'tbl_slider', $id);
                mysqli_query($con, "DELETE FROM tbl_slider WHERE id = $id") or die (mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Deleted!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/slider.php';
                            });
                        });
                    </script>";
            }  else if ($source == 'galery') {
                deleteImgFile($con, $source, 'file', 'tbl_galery', $id);
                mysqli_query($con, "DELETE FROM tbl_galery WHERE id = $id") or die (mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Deleted!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/gallery.php';
                            });
                        });
                    </script>";
            }  else if ($source == 'mitra') {
                deleteImgFile($con, $source, 'file', 'tbl_mitra', $id);
                mysqli_query($con, "DELETE FROM tbl_mitra WHERE id = $id") or die (mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Deleted!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/client.php';
                            });
                        });
                    </script>";
            } else if ($source == 'review') {
                mysqli_query($con, "DELETE FROM tbl_review WHERE id = $id") or die (mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Deleted!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/review.php';
                            });
                        });
                    </script>";
            } else if ($source == 'medsos') {
                mysqli_query($con, "DELETE FROM tbl_sosmed WHERE id = $id") or die (mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Deleted!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/medsos.php';
                            });
                        });
                    </script>";
            } else {
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Unable to delete!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/dashboard.php';
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