<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See https://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - https://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

$table = '';

if (isset($_GET['table'])) {
    if ($_GET['table'] == 'trip') {
        $table = 'tbl_trip';
    } else if ($_GET['table'] == 'itinerary') {
        $table = 'vw_itinerary_trip';
    } else if ($_GET['table'] == 'schedule') {
        $table = 'vw_schedule_trip';
    } else if ($_GET['table'] == 'galery') {
        $table = 'tbl_galery';
    } else if ($_GET['table'] == 'mitra') {
        $table = 'tbl_mitra';
    } else if ($_GET['table'] == 'review') {
        $table = 'tbl_review';
    } else if ($_GET['table'] == 'slider') {
        $table = 'vw_slider_trip';
    } else {
        die("Invalid table name");
    }
}

$primaryKey = 'id';

switch ($table) {
    case 'tbl_trip':
        $columns = array(
            array( 'db' => 'file', 'dt' => 0 ),
            array( 'db' => 'name', 'dt' => 1 ),
            array( 'db' => 'sub', 'dt' => 2 ),
            array( 'db' => 'price', 'dt' => 3 ),
            array( 'db' => 'aft_price', 'dt' => 4 ),
            array( 'db' => 'seat', 'dt' => 5 ),
            array( 'db' => 'is_active', 'dt' => 6 ),
            array( 'db' => 'from_date', 'dt' => 7 ),
            array( 'db' => 'to_date', 'dt' => 8 ),
            array( 'db' => 'id', 'dt' => 9 )
        );
        $where = null;
        break;

    case 'vw_itinerary_trip':
        $columns = array(
            array( 'db' => 'image', 'dt' => 0 ),
            array( 'db' => 'name', 'dt' => 1 ),
            array( 'db' => 'sub', 'dt' => 2 ),
            array( 'db' => 'day', 'dt' => 3 ),
            array( 'db' => 'title', 'dt' => 4 ),
            array( 'db' => 'experience', 'dt' => 5 ),
            array( 'db' => 'transportation', 'dt' => 6 ),
            array( 'db' => 'id', 'dt' => 7 )
        );
        $where = null;
        break;

    case 'vw_schedule_trip':
        $columns = array(
            array( 'db' => 'name', 'dt' => 0 ),
            array( 'db' => 'sub', 'dt' => 1 ),
            array( 'db' => 'january', 'dt' => 2 ),
            array( 'db' => 'february', 'dt' => 3 ),
            array( 'db' => 'march', 'dt' => 4 ),
            array( 'db' => 'april', 'dt' => 5 ),
            array( 'db' => 'may', 'dt' => 6 ),
            array( 'db' => 'june', 'dt' => 7 ),
            array( 'db' => 'july', 'dt' => 8 ),
            array( 'db' => 'august', 'dt' => 9 ),
            array( 'db' => 'september', 'dt' => 10 ),
            array( 'db' => 'october', 'dt' => 11 ),
            array( 'db' => 'november', 'dt' => 12 ),
            array( 'db' => 'december', 'dt' => 13 ),
            array( 'db' => 'id', 'dt' => 14 )
        );
        $where = null;
        break;

    case 'tbl_galery':
        $columns = array(
            array( 'db' => 'file', 'dt' => 0 ),
            array( 'db' => 'id', 'dt' => 1 )
        );
        $where = null;
        break;

    case 'tbl_mitra':
        $columns = array(
            array( 'db' => 'file', 'dt' => 0 ),
            array( 'db' => 'name', 'dt' => 1 ),
            array( 'db' => 'id', 'dt' => 2 )
        );
        $where = null;
        break;

    case 'tbl_review':
        $columns = array(
            array( 'db' => 'name', 'dt' => 0 ),
            array( 'db' => 'message', 'dt' => 1 ),
            array( 'db' => 'id', 'dt' => 2 )
        );
        $where = null;
        break;

    case 'vw_slider_trip':
        $columns = array(
            array( 'db' => 'photo', 'dt' => 0 ),
            array( 'db' => 'name', 'dt' => 1 ),
            array( 'db' => 'sub', 'dt' => 2 ),
            array( 'db' => 'sort', 'dt' => 3 ),
            array( 'db' => 'id', 'dt' => 4 )
        );
        $where = null;
        break;

    default:
        die("Invalid table configuration");
}

$sql_details = array(
    'user' => 'root',       // dev: root        || prod: dock3244_owner
    'pass' => '',           // dev:             || prod: @TripWithUs
    'db'   => 'db_doctrip', // dev: db_doctrip  || prod: dock3244_db_doctrip
    'host' => 'localhost'
);

require( '../assets/ssp.class.php' );

echo json_encode(
    SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where )
);