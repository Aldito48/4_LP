<nav>
    <i class='bx bx-menu'></i>
    <a href="#" class="nav-link"></a>
    <form id="search-form" onsubmit="return false;">
        <div class="form-input">
            <input type="search" id="search-input" placeholder="Search...">
            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
        </div>
        <ul id="search-results"></ul>
    </form>
    <input type="checkbox" id="switch-mode" hidden>
    <label for="switch-mode" class="switch-mode"></label>
    <!-- <a href="javascript:void(0);" class="notification">
        <i class='bx bxs-bell'></i>
        <span class="num">8</span>
    </a> -->
    <a href="javascript:void(0);" class="guider" onclick="showGuide()">
        <i class='bx bxs-info-circle'></i>
    </a>
    <a href="<?=base_url()?>admin/dashboard.php" class="profile">
        <img src="<?=base_url()?>favicon/favicon-32x32.png">
    </a>
    <?php include 'guide.php'; ?>
</nav>