<?php
  require "./handler.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Doctor Trip Indonesia - Open Trip</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Doctor Trip Indonesia merupakan badan usaha yang bergerak dibidang tour and travel yang menyediakan layanan open trip maupun private trip yang semakin mudah, hemat dan menyenangkan ke berbagai destinasi menarik." />
    <meta name="keywords" content="doctrip, doctor trip, doctor trip indonesia, doctor trip asia, healing, travel, adventure, trip, sumut, medan, family, keluarga, liburan, holiday, vacation, nongkrong, partner, jalan jalan, penghilang stress, samosir, sabang, danau toba" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>favicon/favicon-16x16.png" />
    <link rel="manifest" href="<?=base_url()?>site.webmanifest" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/trip.css?v=<?=time()?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  </head>

  <body id="top">
    <header class="header" data-header>
      <div class="overlay" data-overlay></div>
      <div class="header-top">
        <div class="container">
          <a href="" class="helpline-box">
            <!-- <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>
            <div class="wrapper">
              <p class="helpline-title">For Further Inquires :</p>
              <p class="helpline-number">+</p>
            </div> -->
          </a>
          <a href="<?=base_url()?>about.php" class="logo">
            <img src="<?=base_url()?>assets/images/doctrip-white.png" alt="DocTrip logo"/>
          </a>
          <div class="header-btn-group">
            <!-- <button class="search-btn" aria-label="Search">
              <ion-icon name="search"></ion-icon>
            </button> -->
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
              <a href="https://www.instagram.com/<?=$instagram?>" target="_blank" class="social-link">
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

    <main>
      <article>
        <section class="popular" id="trip">
          <div class="container">
            <h2 class="h2 section-title">OPEN TRIP</h2>
            <?php
              if (mysqli_num_rows($resultAllTrip) > 0) {
            ?>
                <ul class="popular-list">
                  <?php
                    while ($dataAllTrip = mysqli_fetch_array($resultAllTrip)) {
                  ?>
                      <li>
                        <div class="popular-card">
                          <figure class="card-img">
                            <a class="popular-link" href="<?=base_url()?>detailTrip.php?id=<?=$dataAllTrip['id']?>">
                              <img
                                src="<?=base_url()?>storage/trip/<?=$dataAllTrip['file']?>"
                                alt="gambar"
                              />
                            </a>
                          </figure>
                          <div class="card-content">
                            <div class="harga">
                              <?php
                                if ($dataAllTrip['aft_price'] != null && !empty($dataAllTrip['aft_price']) && $dataAllTrip['aft_price'] > 0) {
                              ?>
                                  <p><del>Rp <?=priceFormat($dataAllTrip['price'])?></del></p>
                                  <div class="card-rating">
                                    <h3>Rp <?=priceFormat($dataAllTrip['aft_price'])?> / orang</h3>
                                  </div>
                              <?php
                                } else {
                              ?>
                                  <div class="card-rating">
                                    <h3>Rp <?=priceFormat($dataAllTrip['price'])?> / orang</h3>
                                  </div>
                              <?php
                                }
                              ?>
                            </div>
                            <hr><br>
                            <p class="card-subtitle">
                            <a>sisa seat : <b><?=$dataAllTrip['seat']?></b> 
                                (<?=dateFormat($dataAllTrip['from_date'])?> 
                                <?php if ($dataAllTrip['to_date'] !== null && $dataAllTrip['to_date'] !== '0000-00-00') { ?> 
                                    ~ <?=dateFormat($dataAllTrip['to_date'])?> 
                                <?php } ?>
                                )
                            </a>
                            </p>
                            <h3 class="h3 card-title">
                              <a href="<?=base_url()?>detailTrip.php?id=<?=$dataAllTrip['id']?>"><?=$dataAllTrip['name']?></a>
                            </h3>
                            <p class="card-text">
                              <?=$dataAllTrip['sub']?>
                            </p>
                            <a href="https://wa.me/<?=waFormat($wa)?>" target="_blank" class="btn-mini">Book now</a>
                          </div>
                        </div>
                      </li>
                  <?php
                    }
                  ?>
                </ul>
            <?php
              } else {
                echo "No Data Available";
              }
            ?>
          </div>
          <div class="container">
            <h2 class="h2 section-title">OPEN TRIP ASIA</h2>
            <?php
              if (mysqli_num_rows($resultAsiaTrip) > 0) {
            ?>
                <ul class="popular-list">
                  <?php
                    while ($dataAsiaTrip = mysqli_fetch_array($resultAsiaTrip)) {
                  ?>
                      <li>
                        <div class="popular-card">
                          <figure class="card-img">
                            <a class="popular-link" href="<?=base_url()?>detailTrip.php?id=<?=$dataAsiaTrip['id']?>">
                              <img
                                src="<?=base_url()?>storage/trip/<?=$dataAsiaTrip['file']?>"
                                alt="gambar"
                              />
                            </a>
                          </figure>
                          <div class="card-content">
                            <div class="harga">
                              <?php
                                if ($dataAsiaTrip['aft_price'] != null && !empty($dataAsiaTrip['aft_price']) && $dataAsiaTrip['aft_price'] > 0) {
                              ?>
                                  <p><del>Rp <?=priceFormat($dataAsiaTrip['price'])?></del></p>
                                  <div class="card-rating">
                                    <h3>Rp <?=priceFormat($dataAsiaTrip['aft_price'])?> / orang</h3>
                                  </div>
                              <?php
                                } else {
                              ?>
                                  <div class="card-rating">
                                    <h3>Rp <?=priceFormat($dataAsiaTrip['price'])?> / orang</h3>
                                  </div>
                              <?php
                                }
                              ?>
                            </div>
                            <hr><br>
                            <p class="card-subtitle">
                            <a>sisa seat : <b><?=$dataAsiaTrip['seat']?></b> 
                                (<?=dateFormat($dataAsiaTrip['from_date'])?> 
                                <?php if ($dataAsiaTrip['to_date'] !== null && $dataAsiaTrip['to_date'] !== '0000-00-00') { ?> 
                                    ~ <?=dateFormat($dataAsiaTrip['to_date'])?> 
                                <?php } ?>
                                )
                            </a>
                            </p>
                            <h3 class="h3 card-title">
                              <a href="<?=base_url()?>detailTrip.php?id=<?=$dataAsiaTrip['id']?>"><?=$dataAsiaTrip['name']?></a>
                            </h3>
                            <p class="card-text">
                              <?=$dataAsiaTrip['sub']?>
                            </p>
                            <a href="https://wa.me/<?=waFormat($wa)?>" target="_blank" class="btn-mini">Book now</a>
                          </div>
                        </div>
                      </li>
                  <?php
                    }
                  ?>
                </ul>
            <?php
              } else {
                echo "No Data Available";
              }
            ?>
          </div>
        </section>
      </article>
    </main>

    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="footer-brand">
            <a href="<?=base_url()?>about.php" class="logo">
              <img src="<?=base_url()?>assets/images/doctrip-white.png" alt="DocTrip logo" />
            </a>

            <p class="footer-text">
              <?=footerFormat($dataProfile['about'])?>
            </p>
          </div>

          <div class="footer-contact">
            <h4 class="contact-title">Hubungi Kami</h4>

            <ul>
              <li class="contact-item">
                <ion-icon name="logo-whatsapp"></ion-icon>

                <a href="https://wa.me/<?=waFormat($wa)?>" target="_blank" class="contact-link"
                  ><?=numberFormat($wa)?> (<?=$name3?>)</a
                >
              </li>

              <li class="contact-item">
                <ion-icon name="logo-whatsapp"></ion-icon>

                <a href="https://wa.me/<?=waFormat($wa_private)?>" target="_blank" class="contact-link"
                  ><?=numberFormat($wa_private)?> (<?=$name4?>)</a
                >
              </li>
            </ul>
          </div>

          <div class="footer-form">
            <h4 class="contact-title">Alamat Kami</h4>
            <a href="<?=$dataProfile['location']?>" target="_blank" class="contact-link"><?=$dataProfile['address']?></a>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <p class="copyright">
            <?=date('Y')?> &copy; <a href=""><?=$dataProfile['name']?></a>. All rights reserved.
          </p>

          <ul class="footer-bottom-list">
            <li>
              <a href="#" class="footer-bottom-link">Privacy Policy</a>
            </li>

            <li>
              <a href="#" class="footer-bottom-link">Term & Condition</a>
            </li>

            <li>
              <a href="#" class="footer-bottom-link">FAQ</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>

    <a href="#top" class="go-top" data-go-top>
      <ion-icon name="chevron-up-outline"></ion-icon>
    </a>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js?v=<?=time()?>"></script>
    <script src="<?=base_url()?>assets/js/script.js?v=<?=time()?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
