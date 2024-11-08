<?php
    require "../config.php";

    if (isset($_SESSION['user'])) {
        if (time() - $_SESSION['login_time'] > 86400) {
            echo "<script>window.location='".base_url()."admin/logout.php';</script>";
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
        href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css"
        />
        <link
        rel="stylesheet"
        href="https://cdn.datatables.net/fixedcolumns/5.0.1/css/fixedColumns.dataTables.css"
        />
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
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
                        <i class='bx bxs-plane' ></i>
                        <span class="text">
                            <h3>Open Trip</h3>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <a class="addButton" href="javascript:void(0);" onclick="showForm('add', 'trip', null)">
                            <i class='bx bx-plus-medical' ></i>
                            Add Data
                        </a>
                        <table id="record" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Sub</th>
                                    <th>Price</th>
                                    <th>Disc Price</th>
                                    <th>Seat</th>
                                    <th>Status</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th><input type="text" placeholder="Search Name"></th>
                                    <th><input type="text" placeholder="Search Sub"></th>
                                    <th><input type="text" placeholder="Search Price"></th>
                                    <th><input type="text" placeholder="Search Disc"></th>
                                    <th><input type="text" placeholder="Search Seat"></th>
                                    <th><input type="text" placeholder="Search Status"></th>
                                    <th><input type="text" placeholder="Search From"></th>
                                    <th><input type="text" placeholder="Search To"></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <script>
                        $(window).on('load', function() {
                            new DataTable('#record', {
                                ajax: 'fetch.php?table=trip',
                                fixedColumns: {
                                    start: 2,
                                    end: 1
                                },
                                scrollX: true,
                                scrollCollapse: true,
                                serverSide: false,
                                order: [],
                                columnDefs: [
                                    {
                                        searchable: false,
                                        orderable: false,
                                        targets: 0,
                                        render: function(data, type, row) {
                                            let img = '<center><img src=\'../storage/trip/'+data+'\'></center>';
                                            return img;
                                        }
                                    },
                                    {
                                        targets: [
                                            3, 4
                                        ],
                                        render: function(data, type, row) {
                                            let price = new Intl.NumberFormat('id-ID', { minimumFractionDigits: 0 }).format(data);
                                            return `<div style="text-align: right;">${price}</div>`;
                                        }
                                    },
                                    {
                                        targets: 5,
                                        render: function(data, type, row) {
                                            return '<center>'+data+'</center>';
                                        }
                                    },
                                    {
                                        orderable: false,
                                        targets: 6,
                                        render: function(data, type, row) {
                                            let status = `<center><span class='status ${data === 'Iya' ? 'approve' : 'reject'}'>${data === 'Iya' ? 'Active' : 'Non Active'}</span></center>`;
                                            return status;
                                        }
                                    },
                                    {
                                        searchable: false,
                                        orderable: false,
                                        targets: 9,
                                        render: function(data, type, row) {
                                            let btn = '<center><a href=\'javascript:void(0);\' onclick=\'showForm("update", "trip", '+data+')\'><i class=\'bx bxs-edit\'></i></a> <a href=\'javascript:void(0);\' onclick=\'showForm("delete", "trip", '+data+')\'><i class=\'bx bxs-trash\'></i></a> <a href=\'javascript:void(0);\' onclick=\'showForm("view", "trip", '+data+')\'><i class=\'bx bx-target-lock\'></i></a></center>';
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
                                                    column.table().page('first').draw(false);
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
                            <div class="upload">
                                <img class="preview">
                                <div class="round">
                                    <input type="file" accept=".png, .jpg, .jpeg" name="file" onclick="onResetImage(event)" onchange="showImage(event)">
                                    <i class='bx bxs-camera'></i>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="source" value="">
                            <div class="fields-group first">
                                <div class="fields">
                                    <div class="input-field">
                                        <label for="name">Nama Trip</label>
                                        <input type="text" name="name" placeholder="Masukkan nama" required>
                                    </div>

                                    <div class="input-field">
                                        <label for="sub">Sub Nama Trip</label>
                                        <textarea name="sub" spellcheck="false" placeholder="Masukkan sub" required></textarea>
                                    </div>

                                    <div class="input-field">
                                        <label for="seat">Seat</label>
                                        <input type="text" name="seat" value="0" placeholder="Masukkan seat" oninput="typingNumber(this)" required>
                                    </div>

                                    <div class="input-field">
                                        <label for="type">Jenis Trip</label>
                                        <select class="form-select" name="type" required>
                                            <option value="" disabled selected style="display:none;">Pilih</option>
                                            <?php
                                                $dropdown = mysqli_query($con, "SHOW COLUMNS FROM `tbl_trip` WHERE `field` = 'type'");
                                                while($list = mysqli_fetch_row($dropdown)){
                                                    foreach(explode("','",substr($list[1],6,-2)) as $option){
                                                        echo "<option>$option</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="input-field">
                                        <label for="price">Harga Trip</label>
                                        <input type="text" name="price" value="0" placeholder="Masukkan harga" oninput="typingNumber(this)" required>
                                    </div>

                                    <div class="input-field">
                                        <label for="aft_price">Harga Discount Trip</label>
                                        <input type="text" name="aft_price" value="0" placeholder="Masukkan harga diskon" oninput="typingNumber(this)" required>
                                    </div>

                                    <div class="input-field">
                                        <label for="active">Active</label>
                                        <select class="form-select" name="active" required>
                                            <option value="" disabled selected style="display:none;">Pilih</option>
                                            <?php
                                                $dropdown = mysqli_query($con, "SHOW COLUMNS FROM `tbl_trip` WHERE `field` = 'is_active'");
                                                while($list = mysqli_fetch_row($dropdown)){
                                                    foreach(explode("','",substr($list[1],6,-2)) as $option){
                                                        echo "<option>$option</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="input-field">
                                        <label for="meet">Meeting Point</label>
                                        <input type="text" name="meet" placeholder="Masukkan meeting point" required>
                                    </div>

                                    <div class="input-field">
                                        <label for="location">Maps Meeting Point</label>
                                        <input type="text" name="location" placeholder="Masukkan link maps" required>
                                    </div>

                                    <div class="input-field">
                                        <label for="asia">Trip Asia</label>
                                        <select class="form-select" name="asia" required>
                                            <option value="" disabled selected style="display:none;">Pilih</option>
                                            <?php
                                                $dropdown = mysqli_query($con, "SHOW COLUMNS FROM `tbl_trip` WHERE `field` = 'is_asia'");
                                                while($list = mysqli_fetch_row($dropdown)){
                                                    foreach(explode("','",substr($list[1],6,-2)) as $option){
                                                        echo "<option>$option</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="input-field">
                                        <label for="from_date">Dari Tanggal</label>
                                        <input type="date" name="from_date" required>
                                    </div>

                                    <div class="input-field">
                                        <label for="to_date">Sampai Tanggal</label>
                                        <input type="date" name="to_date">
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button class="nextBtn" type="button">
                                        <span class="btnText">Next</span>
                                        <i class='bx bxs-chevrons-right'></i>
                                    </button>
                                </div>
                            </div>
                            <div class="fields-group second">
                                <div class="fields">
                                    <div class="input-field" style="width: 49%;">
                                        <label for="include">Include</label>
                                        <textarea name="include" spellcheck="false" placeholder="Masukkan include" required></textarea>
                                    </div>

                                    <div class="input-field" style="width: 49%;">
                                        <label for="exclude">Exclude</label>
                                        <textarea name="exclude" spellcheck="false" placeholder="Masukkan exclude" required></textarea>
                                    </div>

                                    <div class="input-field" style="width: 49%;">
                                        <label for="detail">Detail</label>
                                        <textarea name="detail" spellcheck="false" placeholder="Masukkan detail" required></textarea>
                                    </div>

                                    <div class="input-field" style="width: 49%;">
                                        <label for="s_k">Syarat & Ketentuan</label>
                                        <textarea name="s_k" spellcheck="false" placeholder="Masukkan syarat dan ketentuan" required></textarea>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button class="backBtn" type="button">
                                        <i class='bx bxs-chevrons-left'></i>
                                        <span class="btnText">Back</span>
                                    </button>
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
        echo "<script>window.location='".base_url()."admin/login.php';</script>";
    }
?>