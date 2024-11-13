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
                    echo "<script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Wrong Format File!',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            });
                        </script>";
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
                                text: 'Succesfully Updated!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/opentrip.php';
                            });
                        });
                    </script>";
            } else if ($source == 'itinerary') {
                $trip = $_POST['trip'];
                $day = str_replace('.', '', $_POST['day']);
                $title = $_POST['title'];
                $experience = $_POST['experience'];
                $transportation = $_POST['transportation'];
                $image = updateImgFile($con, $source, 'image', 'tbl_itinerary', $id);

                mysqli_query($con, "UPDATE tbl_itinerary SET
                    image = '$image',
                    id_trip = $trip,
                    day = $day,
                    title = '$title',
                    experience = '$experience',
                    transportation = '$transportation'
                WHERE id = $id") or die (mysqli_error($con));

                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Updated!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/itinerary.php';
                            });
                        });
                    </script>";
            } else if ($source == 'schedule') {
                $trip = $_POST['trip'];
                $january = $_POST['january'];
                $february = $_POST['february'];
                $march = $_POST['march'];
                $april = $_POST['april'];
                $may = $_POST['may'];
                $june = $_POST['june'];
                $july = $_POST['july'];
                $august = $_POST['august'];
                $september = $_POST['september'];
                $october = $_POST['october'];
                $november = $_POST['november'];
                $december = $_POST['december'];

                mysqli_query($con, "UPDATE tbl_schedule SET
                    id_trip = $trip,
                    january = '$january',
                    february = '$february',
                    march = '$march',
                    april = '$april',
                    may = '$may',
                    june = '$june',
                    july = '$july',
                    august = '$august',
                    september = '$september',
                    october = '$october',
                    november = '$november',
                    december = '$december'
                WHERE id = $id") or die (mysqli_error($con));

                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Updated!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/schedule.php';
                            });
                        });
                    </script>";
            } else if ($source == 'slider') {
                $trip = $_POST['trip'];
                $sort = str_replace('.', '', $_POST['sort']);
                $photo = updateImgFile($con, $source, 'photo', 'tbl_slider', $id);

                mysqli_query($con, "UPDATE tbl_slider SET
                    id_trip = $trip,
                    photo = '$photo',
                    sort = $sort
                WHERE id = $id") or die (mysqli_error($con));

                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Updated!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/slider.php';
                            });
                        });
                    </script>";
            }  else if ($source == 'galery') {
                $file = updateImgFile($con, $source, 'file', 'tbl_galery', $id);

                mysqli_query($con, "UPDATE tbl_galery SET
                    file = '$file'
                WHERE id = $id") or die (mysqli_error($con));

                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Updated!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/gallery.php';
                            });
                        });
                    </script>";
            } else if ($source == 'mitra') {
                $name = $_POST['name'];
                $file = updateImgFile($con, $source, 'file', 'tbl_mitra', $id);

                mysqli_query($con, "UPDATE tbl_mitra SET
                    name = '$name',
                    file = '$file'
                WHERE id = $id") or die (mysqli_error($con));

                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Updated!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/client.php';
                            });
                        });
                    </script>";
            } else if ($source == 'review') {
                $name = $_POST['name'];
                $message = $_POST['message'];

                mysqli_query($con, "UPDATE tbl_review SET
                    name = '$name',
                    message = '$message'
                WHERE id = $id") or die (mysqli_error($con));

                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Updated!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/review.php';
                            });
                        });
                    </script>";
            } else if ($source == 'medsos') {
                $name = $_POST['name'];
                $type = $_POST['type'];
                $account = $_POST['account'];

                mysqli_query($con, "UPDATE tbl_schedule SET
                    name = '$name',
                    type = '$type',
                    account = '$account'
                WHERE id = $id") or die (mysqli_error($con));

                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Updated!',
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
                                text: 'Unable to update!',
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
        echo "<script>window.location='".base_url()."admin/login.php';</script>";
    }
?>