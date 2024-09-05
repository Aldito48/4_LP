<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<section id="sidebar">
    <a href="dashboard.php" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">AdminDoctrip</span>
    </a>
    <ul class="side-menu top">
        <?php
            $queryMenu = "SELECT * FROM tbl_menu WHERE is_active = 'Iya' ORDER BY id ASC";
            $resultMenu = mysqli_query($con, $queryMenu) or die (mysqli_error($con));
            if (mysqli_num_rows($resultMenu) > 0) {
                while ($dataMenu = mysqli_fetch_array($resultMenu)) {
        ?>
                    <li class="<?= ($currentPage == $dataMenu['name'].'.php') ? 'active' : '' ?>">
                        <a href="<?=$dataMenu['name']?>.php">
                            <i class='<?=$dataMenu['icon']?>' ></i>
                            <span class="text"><?=$dataMenu['title']?></span>
                        </a>
                    </li>
        <?php
                }
            }
        ?>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="logout.php" class="logout">
                <i class='bx bx-power-off'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
