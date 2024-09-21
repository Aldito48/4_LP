<?php
    require "../config.php";

    if (isset($_GET['query'])) {
        $searchTerm = mysqli_real_escape_string($con, $_GET['query']);
        $query = "SELECT title, name, icon FROM tbl_menu WHERE is_active = 'Iya' AND title LIKE '%$searchTerm%'";
        $result = mysqli_query($con, $query);

        $results = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        echo json_encode($results);
    }
?>
