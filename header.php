<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<header class="header" data-header>
    <div class="overlay" data-overlay></div>
    <div class="header-top">
        <div class="container">
            <a href="" class="helpline-box"></a>
            <a href="<?=base_url()?>about.php" class="logo">
                <img src="<?=base_url()?>assets/images/doctrip-white.png" alt="DocTrip logo"/>
            </a>
            <div class="header-btn-group">
                <button
                    class="nav-open-btn"
                    aria-label="Open Menu"
                    data-nav-open-btn
                >
                    <ion-icon name="menu-outline"></ion-icon>
                </button>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <ul class="social-list">
                <li>
                    <a href="https://wa.me/<?=waFormat($wa)?>" target="_blank" class="social-link">
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="https://www.tiktok.com/<?=$tiktok?>" target="_blank" class="social-link">
                        <ion-icon name="logo-tiktok"></ion-icon>
                    </a>
                </li>
                <li>
                    <a
                        href="https://www.instagram.com/<?=($currentPage == 'asia.php') ? $instagram_asia : (($currentPage == 'trans.php') ? $instagram_trans : $instagram)?>"
                        target="_blank"
                        class="social-link"
                    >
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
            </ul>

            <nav class="navbar" data-navbar>
                <div class="navbar-top">
                    <a href="<?=base_url()?>about.php" class="logo">
                        <img src="<?=base_url()?>assets/images/doctrip-gray.png" alt="DocTrip logo" />
                    </a>
                    <button
                        class="nav-close-btn"
                        aria-label="Close Menu"
                        data-nav-close-btn
                    >
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">
                    <li>
                        <a href="<?=base_url()?>home.php" class="navbar-link" data-nav-link>home</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>trip.php" class="navbar-link" data-nav-link>open trip</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>asia.php" class="navbar-link" data-nav-link>@doctrip.asia</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>trans.php" class="navbar-link" data-nav-link>@doctrans</a>
                    </li>
                </ul>
            </nav>

            <a href="https://wa.me/<?=waFormat($wa)?>" target="_blank" class="btn btn-light">Book Now</a>
        </div>
    </div>
</header>