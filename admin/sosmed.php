<?php
    require "../config.php";

    if (isset($_SESSION['user'])) {
        if (time() - $_SESSION['login_time'] > 86400) {
            echo "<script>window.location='" . base_url() . "admin/logout.php';</script>";
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
        <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>favicon/favicon-16x16.png" />
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="manifest" href="<?=base_url()?>site.webmanifest" />
        <link rel="stylesheet" href="<?=base_url()?>assets/css/admin.css?v=<?=time()?>" />
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
        <?php include 'sidebar.php'; ?>

        <section id="content">
            <?php include 'navbar.php'; ?>

            <main>
                <ul class="box-info">
                    <li>
                        <i class='bx bxs-calendar-check' ></i>
                        <span class="text">
                            <h3>Sosial Media</h3>
                        </span>
                    </li>
                </ul>


                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Recent Orders</h3>
                            <i class='bx bx-search' ></i>
                            <i class='bx bx-filter' ></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Date Order</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="img/people.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>
                                    <td><span class="status completed">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/people.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/people.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>
                                    <td><span class="status process">Process</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/people.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>
                                    <td><span class="status pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/people.png">
                                        <p>John Doe</p>
                                    </td>
                                    <td>01-10-2021</td>
                                    <td><span class="status completed">Completed</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="todo">
                        <div class="head">
                            <h3>Todos</h3>
                            <i class='bx bx-plus' ></i>
                            <i class='bx bx-filter' ></i>
                        </div>
                        <ul class="todo-list">
                            <li class="completed">
                                <p>Todo List</p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                            <li class="completed">
                                <p>Todo List</p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                            <li class="not-completed">
                                <p>Todo List</p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                            <li class="completed">
                                <p>Todo List</p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                            <li class="not-completed">
                                <p>Todo List</p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </main>
        </section>

        <script src="<?=base_url()?>assets/js/admin.js?v=<?=time()?>"></script>
    </body>
</html>
<?php
    } else {
        echo "<script>window.location='" . base_url() . "admin/login.php';</script>";
    }
?>