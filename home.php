<?php
  require "./handler.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctor Trip Indonesia - Travel Agency</title>
    <link rel="shortcut icon" href="./favicon.png" type="image/svg+xml" />
    <link rel="stylesheet" href="./assets/css/home.css" />
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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
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
          <a href="about.php" class="logo">
            <img src="./assets/images/doctrip-white.png" alt="DocTrip logo"/>
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
              <a href="#" class="logo">
                <img src="./assets/images/doctrip-gray.png" alt="DocTrip logo" />
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
                <a href="home.php" class="navbar-link" data-nav-link>home</a>
              </li>
              <li>
                <a href="trip.php" class="navbar-link" data-nav-link>open trip</a>
              </li>
              <li>
                <a href="asia.php" class="navbar-link" data-nav-link>@doctrip.asia</a>
              </li>
              <li>
                <a href="trans.php" class="navbar-link" data-nav-link>@doctrans</a>
              </li>
            </ul>
          </nav>

          <a href="https://wa.me/<?=waFormat($wa)?>" target="_blank" class="btn btn-light">Book Now</a>
        </div>
      </div>
    </header>

    <main>
      <article>
        <section class="hero" id="home">
          <div class="container">
            <h2 class="h1 hero-title">OBAT PALING BAHAGIA<br>ADALAH LIBURAN</h2>
            <p class="hero-text">
              OPEN TRIP TERBESAR DI SUMATERA. SUDAH RIBUAN ALUMNI PRIVATE DAN OPEN TRIP.
              <br>
              #HealingWithDoctorTrip
            </p>
            <div class="btn-group">
              <a href="#trip" class="btn btn-light">CEK DISINI</a>
              <a href="https://wa.me/<?=waFormat($wa)?>" target="_blank" class="btn btn-secondary">Book now</a>
            </div>
          </div>
        </section>

        <section class="popular" id="trip">
          <div class="container">
            <h2 class="h2 section-title">OPEN TRIP</h2>
            <?php
              if (mysqli_num_rows($resultSpecialTrip) > 0) {
            ?>
                <ul class="popular-list">
                  <?php
                    while ($dataSpecialTrip = mysqli_fetch_array($resultSpecialTrip)) {
                  ?>
                    <li>
                      <div class="popular-card">
                        <figure class="card-img">
                          <a class="popular-link" href="detailTrip.php?id=<?=$dataSpecialTrip['id']?>">
                            <img
                              src="./storage/trip/<?=$dataSpecialTrip['file']?>"
                              alt="gambar"
                              loading="lazy"
                            />
                          </a>
                        </figure>
                        <div class="card-content">
                          <div class="harga">
                            <?php
                              if ($dataSpecialTrip['aft_price'] !== null && !empty($dataSpecialTrip['aft_price']) && $dataSpecialTrip['aft_price'] > 0) {
                            ?>
                                <p><del>Rp <?=number_format($dataSpecialTrip['price'])?></del></p>
                                <div class="card-rating">
                                  <h3>Rp <?=number_format($dataSpecialTrip['aft_price'], 0, ',', '.')?> / orang</h3>
                                </div>
                            <?php
                              } else {
                            ?>
                                <div class="card-rating">
                                  <h3>Rp <?=number_format($dataSpecialTrip['price'], 0, ',', '.')?> / orang</h3>
                                </div>
                            <?php
                              }
                            ?>
                          </div>
                          <hr><br>
                          <p class="card-subtitle">
                            <a>sisa seat : <b><?=$dataSpecialTrip['seat']?></b> (<?=$dataSpecialTrip['from_date']?> ~ <?=$dataSpecialTrip['to_date']?>)</a>
                          </p>
                          <h3 class="h3 card-title">
                            <a><?=$dataSpecialTrip['name']?></a>
                          </h3>
                          <p class="card-text">
                            <?=$dataSpecialTrip['sub']?>
                          </p>
                          <a href="https://wa.me/<?=waFormat($wa)?>?text=Halo%20Admin%20DoctorTrip!%0ASaya%20mau%20pesan%20*<?=$dataSpecialTrip['name']?>*" target="_blank" class="btn-mini">Book now</a>
                        </div>
                      </div>
                    </li>
                  <?php
                    }
                  ?>
                </ul>
            <?php
              } else if (mysqli_num_rows($resultPromoTrip) > 0) {
            ?>
                <ul class="popular-list">
                  <?php
                    while ($dataPromoTrip = mysqli_fetch_array($resultPromoTrip)) {
                  ?>
                    <li>
                      <div class="popular-card">
                        <figure class="card-img">
                          <a class="popular-link" href="detailTrip.php?id=<?=$dataPromoTrip['id']?>">
                            <img
                              src="./storage/trip/<?=$dataPromoTrip['file']?>"
                              alt="gambar"
                              loading="lazy"
                            />
                          </a>
                        </figure>
                        <div class="card-content">
                          <div class="harga">
                            <?php
                              if ($dataPromoTrip['aft_price'] !== null && !empty($dataPromoTrip['aft_price']) && $dataPromoTrip['aft_price'] > 0) {
                            ?>
                                <p><del>Rp <?=number_format($dataPromoTrip['price'])?></del></p>
                                <div class="card-rating">
                                  <h3>Rp <?=number_format($dataPromoTrip['aft_price'], 0, ',', '.')?> / orang</h3>
                                </div>
                            <?php
                              } else {
                            ?>
                                <div class="card-rating">
                                  <h3>Rp <?=number_format($dataPromoTrip['price'], 0, ',', '.')?> / orang</h3>
                                </div>
                            <?php
                              }
                            ?>
                          </div>
                          <p class="card-subtitle">
                            <a>sisa seat : <b><?=$dataPromoTrip['seat']?></b> (<?=$dataPromoTrip['from_date']?> ~ <?=$dataPromoTrip['to_date']?>)</a>
                          </p>
                          <h3 class="h3 card-title">
                            <a><?=$dataPromoTrip['name']?></a>
                          </h3>
                          <p class="card-text">
                            <?=$dataPromoTrip['sub']?>
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

            <a href="trip.php" style="width: fit-content;" class="btn btn-light">More Trip</a>
          </div>
        </section>

        <section class="private" id="private">
          <div class="container">
            <div class="private-content">
              <p class="section-subtitle">MAU REQUEST PAKET TRIP?</p>

              <h2 class="h2 section-title">
                LIBURAN BARENG BESTIE/KELUARGA/<br>SATU KANTOR
              </h2>

              <p class="section-text">
                Yuk, Hubungi kami sekarang !!
              </p>
            </div>

            <a href="https://wa.me/<?=waFormat($wa_private)?>" target="_blank" class="btn btn-secondary">Contact Us !</a>
          </div>
        </section>

        <section class="gallery" id="gallery">
          <div class="container">

            <h2 class="h2 section-title">Traveller's Photos</h2>

            <ul class="gallery-list">
              <?php
                while ($dataGalery = mysqli_fetch_array($resultGalery)) {
              ?>
                  <li class="gallery-item">
                    <figure class="gallery-image">
                      <img
                        src="./storage/galery/<?=$dataGalery['file']?>"
                        alt="Gallery image"
                      />
                    </figure>
                  </li>
              <?php
                }
              ?>
            </ul>
            <br>
            <!-- <button class="btn btn-light" style="margin: auto;">View More Image</button> -->
          </div>
        </section>

        <section class="banner" id="client">
          <div class="container">
            <h2 class="h2 section-title">OUR CLIENT</h2>
            <div class="banner__wrapper">
              <?php
                while ($dataMitra = mysqli_fetch_array($resultMitra)) {
              ?>
                  <div class="banner__card">
                    <img src="./storage/mitra/<?=$dataMitra['file']?>" alt="banner" />
                    <div class="banner__content">
                      <h4><?=$dataMitra['name']?></h4>
                    </div>
                  </div>
              <?php
                }
              ?>
            </div>
          </div>
          <br>
        </section>

        <section class="cta" id="contact">
          <div class="container">
            <div class="cta-content">
              <h2 class="h2 section-title">
                BOOKING TRIP KAMU SEKARANG !
              </h2>

              <p class="section-text">
                #HealingWithDoctorTrip
              </p>
            </div>

            <a href="https://wa.me/<?=waFormat($wa)?>" target="_blank" class="btn btn-secondary">Booking Disini!</a>
          </div>
        </section>

        <section class="review" id="review">
          <div class="container">
            <h2 class="h2 section-title">REVIEW</h2>
            <ion-icon class="prev" name="chevron-back"></ion-icon>
            <ion-icon class="next" name="chevron-forward"></ion-icon>
            <div class="evaluate_wrapper">
              <?php
                if (mysqli_num_rows($resultReview) > 0) {
                  while ($dataReview = mysqli_fetch_array($resultReview)) {
              ?>
                    <div class="evaluate">
                      <ion-icon name="person" style="margin: auto;"></ion-icon>
                      <h4><?=$dataReview['name']?></h4>
                      <hr>
                      <div class="evaluate-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                      <hr>
                      <p><?=$dataReview['message']?></p>
                    </div>
              <?php
                  }
                } else {
                  echo "No Data Available";
                }
              ?>
            </div>
          </div>
          <br>
        </section>
      </article>
    </main>

    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="footer-brand">
            <a href="about.php" class="logo">
              <img src="./assets/images/doctrip-white.png" alt="DocTrip logo" />
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
            <a href="<?=$dataProfile['location']?>" class="contact-link" target="_blank"><?=$dataProfile['address']?></a>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <p class="copyright">
            2022 &copy; <a href=""><?=$dataProfile['name']?></a>. All rights reserved.
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/script.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
