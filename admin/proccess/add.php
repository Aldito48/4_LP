<?php
    require "../../config.php";

    if (isset($_SESSION['user'])) {
        if (time() - $_SESSION['login_time'] > 86400) {
            echo "<script>window.location='../logout.php';</script>";
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Doctor Trip Indonesia - Healing With Doctor Trip</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png" />
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="manifest" href="../../site.webmanifest" />
        <link rel="stylesheet" href="../../assets/css/admin.css?v=<?=time()?>" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet"
        />
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
    </head>
    <body>
        <?php include '../sidebar.php'; ?>

        <section id="content">
            <?php include '../navbar.php'; ?>

            <main>
                <ul class="box-info">
                    <li>
                        <i class='bx bxs-calendar-check' ></i>
                        <span class="text">
                            <h3>Add</h3>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div id="formData">
                        <button type="button" onclick="hideForm()"><i class='bx bx-arrow-back'></i></button>
                        <h3 class="title-form"></h3>
                        <form class="form-layout" id="dataForm" method="POST" action="" enctype="multipart/form-data">
                            <div class="fields">
                                <div class="input-field">
                                    <label for="name">Nama</label>
                                    <input type="text" id="name" name="name" placeholder="Masukkan nama" required>
                                </div>

                                <div class="input-field">
                                    <label for="sub">Sub Nama</label>
                                    <input type="text" id="sub" name="sub" placeholder="Masukkan sub" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </section>

        <script src="../../assets/js/admin.js?v=<?=time()?>"></script>
    </body>
</html>
<?php
    } else {
        echo "<script>window.location='../login.php';</script>";
    }
?>