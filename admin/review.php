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
        <link
        rel="stylesheet"
        href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.css"
        />
        <link
        rel="stylesheet"
        href="https://cdn.datatables.net/fixedcolumns/5.0.1/css/fixedColumns.dataTables.css"
        />
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/fixedcolumns/5.0.1/js/dataTables.fixedColumns.js"></script>
        <script src="https://cdn.datatables.net/fixedcolumns/5.0.1/js/fixedColumns.dataTables.js"></script>
    </head>
    <body>
        <?php include 'sidebar.php'; ?>

        <section id="content">
            <?php include 'navbar.php'; ?>

            <main>
                <ul class="box-info">
                    <li>
                        <i class='bx bxs-star' ></i>
                        <span class="text">
                            <h3>Review</h3>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <a class="addButton" href="javascript:void(0);" onclick="showForm('add', 'review', null)">
                            <i class='bx bx-plus-medical' ></i>
                            Add Data
                        </a>
                        <table id="record" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <th><input type="text" placeholder="Search Name"></th>
                                    <th><input type="text" placeholder="Search Message"></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <script>
                        $(window).on('load', function() {
                            new DataTable('#record', {
                                ajax: 'fetch.php?table=review',
                                fixedColumns: {
                                    start: 1,
                                    end: 1
                                },
                                scrollX: true,
                                scrollCollapse: true,
                                serverSide: true,
                                order: [],
                                columnDefs: [
                                    {
                                        searchable: false,
                                        orderable: false,
                                        targets: 2,
                                        render: function(data, type, row) {
                                            let btn = '<a href=\'javascript:void(0);\' onclick=\'showForm("update", "review", '+data+')\'><i class=\'bx bxs-edit\'></i></a> <a href=\'javascript:void(0);\' onclick=\'showForm("delete", "review", '+data+')\'><i class=\'bx bxs-trash\'></i></a> <a href=\'javascript:void(0);\' onclick=\'showForm("view", "review", '+data+')\'><i class=\'bx bx-target-lock\'></i></a>';
                                            return btn;
                                        }
                                    },
                                    {
                                        targets: '_all',
                                        orderable: false
                                    }
                                ],
                                initComplete: function () {
                                    this.api()
                                        .columns()
                                        .every(function () {
                                            let column = this;
                                            $('input', column.header()).on('keyup change clear', function () {
                                                if (column.search() !== this.value) {
                                                    column
                                                        .search(this.value)
                                                        .draw(false);
                                                }
                                            });
                                        });
                                }
                            });
                        });
                    </script>

                    <?php include 'modal.php'; ?>

                    <div id="formData">
                        <div class="formHead">
                            <a class="goback" onclick="hideForm()"><i class='bx bx-arrow-back'></i></a>
                            <div>
                                <h3 class="title-form"></h3>
                            </div>
                        </div>
                        <hr>
                        <form class="form-layout" id="dataForm" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="source" value="">
                            <div class="fields-group first">
                                <div class="fields">
                                    <div class="input-field" style="width: 49%;">
                                        <label for="name">Nama</label>
                                        <input type="text" name="name" placeholder="Masukkan nama" required>
                                    </div>
                                    <div class="input-field" style="width: 49%;">
                                        <label for="message">Pesan</label>
                                        <input type="text" name="message" placeholder="Masukkan pesan" required>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button class="submit" type="submit">
                                        <span class="btnText"></span>
                                        <i class='bx bx-send'></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </section>

        <script src="<?=base_url()?>assets/js/admin.js?v=<?=time()?>"></script>
        <script src="<?=base_url()?>assets/js/request.js?v=<?=time()?>"></script>
    </body>
</html>
<?php
    } else {
        echo "<script>window.location='" . base_url() . "admin/login.php';</script>";
    }
?>