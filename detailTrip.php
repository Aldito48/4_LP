<?php
  require "./handler.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Doctor Trip Indonesia - Detail Trip</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>favicon/favicon-16x16.png" />
    <link rel="manifest" href="<?=base_url()?>site.webmanifest" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/detailTrip.css?v=<?=time()?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  </head>

  <body id="top">
    <?php include 'header.php'; ?>

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
                    <div class="swiper">
                      <div class="card-wrapper">
                        <div class="card-list swiper-wrapper">
                          <?php
                            while ($dataSlider = mysqli_fetch_array($resultSlider)) {
                          ?>
                              <div class="swiper-slide">
                                <a class="card-link">
                                  <img
                                    src="<?=base_url()?>storage/slider/<?=$dataSlider['photo']?>"
                                    alt="Gambar"
                                    class="card-image"
                                  />
                                </a>
                              </div>
                          <?php
                            }
                          ?>
                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-slide-button swiper-button-prev"></div>
                        <div class="swiper-slide-button swiper-button-next"></div>
                      </div>
                    </div>
                <?php
                  } else {
                ?>
                    <div class="img-tour">
                      <img
                        src="<?=base_url()?>storage/trip/<?=$dataDetailTrip['file']?>"
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
                        <?php if ($dataSchedule['january'] !== "-") { ?>
                            <tr>
                                <td>JANUARI</td>
                                <td>: <?=$dataSchedule['january']?></td>
                            </tr>
                        <?php } ?>
                        
                        <?php if ($dataSchedule['february'] !== "-") { ?>
                            <tr>
                                <td>FEBRUARI</td>
                                <td>: <?=$dataSchedule['february']?></td>
                            </tr>
                        <?php } ?>
                        
                        <?php if ($dataSchedule['march'] !== "-") { ?>
                            <tr>
                                <td>MARET</td>
                                <td>: <?=$dataSchedule['march']?></td>
                            </tr>
                        <?php } ?>
                        
                        <?php if ($dataSchedule['april'] !== "-") { ?>
                            <tr>
                                <td>APRIL</td>
                                <td>: <?=$dataSchedule['april']?></td>
                            </tr>
                        <?php } ?>
                        
                        <?php if ($dataSchedule['may'] !== "-") { ?>
                            <tr>
                                <td>MEI</td>
                                <td>: <?=$dataSchedule['may']?></td>
                            </tr>
                        <?php } ?>
                        
                        <?php if ($dataSchedule['june'] !== "-") { ?>
                            <tr>
                                <td>JUNI</td>
                                <td>: <?=$dataSchedule['june']?></td>
                            </tr>
                        <?php } ?>
                        
                        <?php if ($dataSchedule['july'] !== "-") { ?>
                            <tr>
                                <td>JULI</td>
                                <td>: <?=$dataSchedule['july']?></td>
                            </tr>
                        <?php } ?>
                        
                        <?php if ($dataSchedule['august'] !== "-") { ?>
                            <tr>
                                <td>AGUSTUS</td>
                                <td>: <?=$dataSchedule['august']?></td>
                            </tr>
                        <?php } ?>
                        
                        <?php if ($dataSchedule['september'] !== "-") { ?>
                            <tr>
                                <td>SEPTEMBER</td>
                                <td>: <?=$dataSchedule['september']?></td>
                            </tr>
                        <?php } ?>
                        
                        <?php if ($dataSchedule['october'] !== "-") { ?>
                            <tr>
                                <td>OKTOBER</td>
                                <td>: <?=$dataSchedule['october']?></td>
                            </tr>
                        <?php } ?>
                        
                        <?php if ($dataSchedule['november'] !== "-") { ?>
                            <tr>
                                <td>NOVEMBER</td>
                                <td>: <?=$dataSchedule['november']?></td>
                            </tr>
                        <?php } ?>
                        
                        <?php if ($dataSchedule['december'] !== "-") { ?>
                            <tr>
                                <td>DESEMBER</td>
                                <td>: <?=$dataSchedule['december']?></td>
                            </tr>
                        <?php } ?>
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
                                    src="<?=base_url()?>storage/itinerary/<?=$dataItinerary['image']?>"
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

    <?php include 'footer.php'; ?>

    <a href="#top" class="go-top" data-go-top>
      <ion-icon name="chevron-up-outline"></ion-icon>
    </a>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js?v=<?=time()?>"></script>
    <script src="<?=base_url()?>assets/js/script.js?v=<?=time()?>"></script>
    <script src="<?=base_url()?>assets/js/swiper.js?v=<?=time()?>"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>
