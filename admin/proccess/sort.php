<?php
    require '../../config.php';

    if (isset($_POST['newSorts'])) {
        $newSorts = $_POST['newSorts'];
        foreach ($newSorts as $id => $newSort) {
            $sql = "UPDATE tbl_trip SET sort = ? WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("ii", $newSort, $id);
            $stmt->execute();
        }
    }
?>
