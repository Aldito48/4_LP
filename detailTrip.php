<?php
  require "./handler.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Doctor Trip Indonesia - Healing With Doctor Trip</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./site.webmanifest" />
    <link rel="stylesheet" href="./assets/css/detailTrip.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
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
        <section class="package" id="detail">
          <div class="container">
            <p class="section-subtitle">Detail Paket</p>
            <?php
              if (mysqli_num_rows($resultDetailTrip) > 0) {
            ?>
                <h2 class="h2 section-title"><?=$dataDetailTrip['name']?></h2>

                <p class="section-text">
                  <?=$dataDetailTrip['sub']?>
                </p>

                <?php
                  if (mysqli_num_rows($resultSlider) > 1) {
                ?>
                    <div class="slider">
                      <div class="slides">
                        <?php
                          while ($dataSlider = mysqli_fetch_array($resultSlider)) {
                        ?>
                            <img
                              src="./storage/slider/<?=$dataSlider['photo']?>"
                              alt="Gambar"
                              class="slide"
                            />
                        <?php
                          }
                        ?>
                      </div>
                    </div>
                <?php
                  } else {
                ?>
                    <div class="img-tour">
                      <img
                        src="./storage/trip/<?=$dataDetailTrip['file']?>"
                        alt="Gambar"
                      />
                    </div>
                <?php
                  }
                ?>
                <br>

                <p class="detail-text">
                  <?=$dataDetailTrip['detail']?>
                </p>

                <h3>SCHEDULE <?=date("Y")?></h3>
                <?php
                  if (mysqli_num_rows($resultSchedule) > 0) {
                ?>
                    <table>
                        <tr>
                            <td>JANUARI</td>
                            <td>: <?=$dataSchedule['january']?></td>
                        </tr>
                        <tr>
                            <td>FEBRUARI</td>
                            <td>: <?=$dataSchedule['february']?></td>
                        </tr>
                        <tr>
                            <td>MARET</td>
                            <td>: <?=$dataSchedule['march']?></td>
                        </tr>
                        <tr>
                            <td>APRIL</td>
                            <td>: <?=$dataSchedule['april']?></td>
                        </tr>
                        <tr>
                            <td>MEI</td>
                            <td>: <?=$dataSchedule['may']?></td>
                        </tr>
                        <tr>
                            <td>JUNI</td>
                            <td>: <?=$dataSchedule['june']?></td>
                        </tr>
                        <tr>
                            <td>JULI</td>
                            <td>: <?=$dataSchedule['july']?></td>
                        </tr>
                        <tr>
                            <td>AGUSTUS</td>
                            <td>: <?=$dataSchedule['august']?></td>
                        </tr>
                        <tr>
                            <td>SEPTEMBER</td>
                            <td>: <?=$dataSchedule['september']?></td>
                        </tr>
                        <tr>
                            <td>OKTOBER</td>
                            <td>: <?=$dataSchedule['october']?></td>
                        </tr>
                        <tr>
                            <td>NOVEMBER</td>
                            <td>: <?=$dataSchedule['november']?></td>
                        </tr>
                        <tr>
                            <td>DESEMBER</td>
                            <td>: <?=$dataSchedule['december']?></td>
                        </tr>
                    </table>
                <?php
                  } else {
                    echo "No Data Available";
                  }
                ?>

                <div class="box">
                  <p>HARGA</p>
                  <hr>
                  <?php
                    if ($dataDetailTrip['aft_price'] != null && !empty($dataDetailTrip['aft_price']) && $dataDetailTrip['aft_price'] > 0) {
                  ?>
                      <h4>Rp <?=priceFormat($dataDetailTrip['aft_price'])?> / Orang</h4>
                  <?php
                    } else {
                  ?>
                      <h4>Rp <?=priceFormat($dataDetailTrip['price'])?> / Orang</h4>
                  <?php
                    }
                  ?>
                </div>

                <h3>MEETING POINT</h3>
                <a href="<?=$dataDetailTrip['location']?>" target="_blank">
                  <p style="display: flex; justify-content: flex-start; align-items: center;">
                    <ion-icon name="location"></ion-icon>&nbsp;<i><u><?=$dataDetailTrip['meet']?></u></i>
                  </p>
                </a>
                <br>

                <table class="benefit">
                  <thead>
                    <tr>
                      <th>INCLUDE</th>
                      <th>EXCLUDE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><ul><?=$dataDetailTrip['include']?></ul></td>
                      <td><ul><?=$dataDetailTrip['exclude']?></ul></td>
                    </tr>
                  </tbody>
                </table>
                <br>

                <a class="itinerary-show" onclick="openItinerary2()">
                  <h3><u>ITINERARY</u><ion-icon name="create-outline"></ion-icon></h3>
                  <p>Intip seluruh keseruan yang akan kamu alami di trip ini!</p>
                  <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                </a>
                <!-- <div id="itinerary" class="itinerary">
                  <div class="itinerary-detail">
                    <div class="itinerary-title">
                      <h3>Detail Itinerary</h3>
                      <span class="close" onclick="closeItinerary()">&times;</span>
                    </div>
                    <hr>
                    <ion-icon class="prev" name="chevron-back"></ion-icon>
                    <ion-icon class="next" name="chevron-forward"></ion-icon>
                    <?php
                      // if (mysqli_num_rows($resultItinerary) > 0) {
                    ?>
                        <div class="itinerary-wrapper">
                    <?php
                          // while ($dataItinerary = mysqli_fetch_array($resultItinerary)) {
                    ?>
                            <div class="itinerary-content">
                              <h4><?php // $dataItinerary['title']?></h4>
                              <div class="itinerary-card">
                                <div class="layout-1">
                                  <p><b>Experiences</b></p>
                                  <ul><?php // $dataItinerary['experience']?></ul>
                                  <br>
                                  <p><b>Transportation</b></p>
                                  <ul><?php // $dataItinerary['transportation']?></ul>
                                </div>
                                <div class="layout-2">
                                  <img
                                    src="./storage/itinerary/<?php // $dataItinerary['image']?>"
                                    alt="Photos"
                                  />
                                </div>
                              </div>
                            </div>
                    <?php
                          // }
                    ?>
                        </div>
                    <?php
                      // } else {
                      //   echo "No Data Available";
                      // }
                    ?>
                  </div>
                </div> -->
                <div id="itinerary-2" class="itinerary-2">
                  <div class="itinerary-detail-2">
                    <div class="itinerary-title-2">
                      <h3>Detail Itinerary</h3>
                      <span class="close" onclick="closeItinerary2()">&times;</span>
                    </div>
                    <hr>
                    <?php
                      if (mysqli_num_rows($resultItinerary) > 0) {
                    ?>
                        <div class="itinerary-wrapper-2">
                    <?php
                          while ($dataItinerary = mysqli_fetch_array($resultItinerary)) {
                    ?>
                            <div class="itinerary-content-2">
                              <h4><?=$dataItinerary['title']?></h4>
                              <div class="itinerary-card-2">
                                <div class="layout-1">
                                  <p><b>Experiences</b></p>
                                  <ul><?=$dataItinerary['experience']?></ul>
                                  <br>
                                  <p><b>Transportation</b></p>
                                  <ul><?=$dataItinerary['transportation']?></ul>
                                </div>
                                <div class="layout-2">
                                  <img
                                    src="./storage/itinerary/<?=$dataItinerary['image']?>"
                                    alt="Photos"
                                  />
                                </div>
                              </div>
                            </div>
                    <?php
                          }
                    ?>
                        </div>
                    <?php
                      } else {
                        echo "No Data Available";
                      }
                    ?>
                  </div>
                </div>
                <br>

                <button class="popup-button" onclick="openSnK()">Syarat & Ketentuan</button>
                <div id="sKPopup" class="popup">
                  <div class="popup-content">
                    <div class="popup-title">
                      <h3>Syarat & Ketentuan</h3>
                      <span class="close" onclick="closeSnK()">&times;</span>
                    </div>
                    <hr>
                    <ul><?=$dataDetailTrip['s_k']?></ul>
                  </div>
                </div>

                <a href="https://wa.me/<?=waFormat($wa)?>" target="_blank" style="width: 100%; text-align: center; margin-top: 20px;" class="btn btn-light">BOOK NOW</a>
                <br>
            <?php
              } else {
                echo "<script>window.location='home.php';</script>";
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
            <a href="<?=$dataProfile['location']?>" target="_blank" class="contact-link"><?=$dataProfile['address']?></a>
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
