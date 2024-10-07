<?php
    require '../../config.php';

    if (isset($_SESSION['user'])) {
        if (time() - $_SESSION['login_time'] > 86400) {
            echo "<script>window.location='".base_url()."admin/logout.php';</script>";
        }

        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

        function updateImgFile($con, $path, $name, $table, $id) {
            $queryFile = mysqli_query($con, "SELECT $name FROM $table WHERE id = $id LIMIT 1");
            $row = mysqli_fetch_array($queryFile);
            $existing_file = $row[$name];
            $dir = "../../storage/".$path."/";
            if (isset($_FILES[$name]) && $_FILES[$name]['error'] === UPLOAD_ERR_OK) {
                $img = $_FILES[$name]['name'];
                $extension = pathinfo($img, PATHINFO_EXTENSION);
                if ($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg') {
                    $encrypted = md5(uniqid()) . "." . $extension;
                    $file = $encrypted;
                    $temp = $_FILES[$name]['tmp_name'];
                    if ($existing_file != $file) {
                        $prev = $dir . $existing_file;
                        unlink($prev);
                    } else {
                        $file = $existing_file;
                    }
                    move_uploaded_file($temp, $dir . $file);
                } else {
                    $file = $existing_file;
                    echo "<script>alert('Wrong format file');</script>";
                }
            } else{
                $file = $existing_file;
            }
            return $file;
        }

        $id = $_POST['id'];
        $source = $_POST['source'];

        if (isset($id) && isset($source)) {
            if ($source == 'trip') {
                $name = $_POST['name'];
                $sub = $_POST['sub'];
                $seat = str_replace('.', '', $_POST['seat']);
                $type = $_POST['type'];
                $price = str_replace('.', '', $_POST['price']);
                $aft_price = str_replace('.', '', $_POST['aft_price']);
                $is_active = $_POST['active'];
                $meet = $_POST['meet'];
                $location = $_POST['location'];
                $is_asia = $_POST['asia'];
                $from_date = $_POST['from_date'];
                $to_date = $_POST['to_date'];
                $detail = $_POST['detail'];
                $include = $_POST['include'];
                $exclude = $_POST['exclude'];
                $s_k = $_POST['s_k'];
                $file = updateImgFile($con, $source, 'file', 'tbl_trip', $id);

                mysqli_query($con, "UPDATE tbl_trip SET
                    file = '$file',
                    name = '$name',
                    sub = '$sub',
                    seat = $seat,
                    type = '$type',
                    price = $price,
                    aft_price = $aft_price,
                    is_active = '$is_active',
                    meet = '$meet',
                    location = '$location',
                    is_asia = '$is_asia',
                    from_date = '$from_date',
                    to_date = '$to_date',
                    detail = '$detail',
                    include = '$include',
                    exclude = '$exclude',
                    s_k = '$s_k'
                WHERE id = $id") or die (mysqli_error($con));

                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Updated!'
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
                                text: 'Unable to update!'
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
        echo "<script>window.location='".base_url()."admin/login.php';</script>";
    }
?>