<?php
    require '../../config.php';

    if (isset($_SESSION['user'])) {
        if (time() - $_SESSION['login_time'] > 86400) {
            echo "<script>window.location='" . base_url() . "admin/logout.php';</script>";
        }

        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";

        function uploadImgFile($path, $name) {
            $dir = "../../storage/".$path."/";
            $img = $_FILES[$name]['name'];
            $extension = pathinfo($img, PATHINFO_EXTENSION);
            if ($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg') {
                $encrypted = md5(uniqid()) . "." . $extension;
                $file = $encrypted;
                $temp = $_FILES[$name]['tmp_name'];
                move_uploaded_file($temp, $dir . $file);
                return $file;
            } else {
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
                return false;
            }
        }

        $source = $_POST['source'];

        if (isset($source)) {
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
                $file = uploadImgFile($source, 'file');

                mysqli_query($con, "INSERT INTO tbl_trip (file, name, sub, seat, type, price, aft_price, is_active, meet, location, is_asia, from_date, to_date, detail, include, exclude, s_k)
                VALUES ('$file', '$name', '$sub', $seat, '$type', $price, $aft_price, '$is_active', '$meet', '$location', '$is_asia', '$from_date', '$to_date', '$detail', '$include', '$exclude', '$s_k')") or die(mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Added!',
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
                $image = uploadImgFile($source, 'image');

                mysqli_query($con, "INSERT INTO tbl_itinerary (image, id_trip, day, title, experience, transportation)
                VALUES ('$image', $trip, $day, '$title', '$experience', '$transportation')") or die(mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Added!',
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

                mysqli_query($con, "INSERT INTO tbl_schedule (id_trip, january, february, march, april, may, june, july, august, september, october, november, december)
                VALUES ($trip, '$january', '$february', '$march', '$april', '$may', '$june', '$july', '$august', '$september', '$october', '$november', '$december')") or die(mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Added!',
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
                $photo = uploadImgFile($source, 'photo');

                mysqli_query($con, "INSERT INTO tbl_slider (id_trip, photo, sort)
                VALUES ($trip, '$photo', $sort)") or die(mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Added!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/slider.php';
                            });
                        });
                    </script>";
            }  else if ($source == 'galery') {
                $file = uploadImgFile($source, 'file');

                mysqli_query($con, "INSERT INTO tbl_galery (file)
                VALUES ('$file')") or die(mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Added!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(() => {
                                window.location='".base_url()."admin/gallery.php';
                            });
                        });
                    </script>";
            } else if ($source == 'mitra') {
                $name = $_POST['name'];
                $file = uploadImgFile($source, 'file');

                mysqli_query($con, "INSERT INTO tbl_mitra (name, file)
                VALUES ('$name', '$file')") or die(mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Added!',
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

                mysqli_query($con, "INSERT INTO tbl_review (name, message)
                VALUES ('$name', '$message')") or die(mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Added!',
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

                mysqli_query($con, "INSERT INTO tbl_sosmed (name, type, account)
                VALUES ($name, '$type', '$account')") or die(mysqli_error($con));
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Succesfully Added!',
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
                                text: 'Unable to add!',
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