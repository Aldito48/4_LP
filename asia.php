<?php
  require "./handler.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Doctor Trip Indonesia - Asia</title>
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
    <link rel="stylesheet" href="<?=base_url()?>assets/css/asia.css?v=<?=time()?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  </head>

  <body id="top">
    <?php include 'header.php'; ?>

    <main>
      <article>
        <section class="popular" id="trip">
          <div class="container">
            <?php
              if (mysqli_num_rows($resultAsiaTrip) > 0) {
            ?>
                <h2 class="h2 section-title">ASIA TRIP</h2>
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
                            ( <?=dateFormat($dataAsiaTrip['from_date'])?> 
                            <?php if ($dataAsiaTrip['to_date'] !== null && $dataAsiaTrip['to_date'] !== '0000-00-00') { ?> 
                                ~ <?=dateFormat($dataAsiaTrip['to_date'])?> 
                            <?php } ?> )
                          </a>
                          </p>
                          <h3 class="h3 card-title">
                            <a href="<?=base_url()?>detailTrip.php?id=<?=$dataAsiaTrip['id']?>"><?=$dataAsiaTrip['name']?></a>
                          </h3>
                          <p class="card-text">
                            <?=$dataAsiaTrip['sub']?>
                          </p>
                          <a href="https://wa.me/<?=waFormat($wa)?>?text=Halo%20Admin%20DoctorTrip!%0ASaya%20mau%20pesan%20*<?=$dataAsiaTrip['name']?>*" target="_blank" class="btn-mini">Book now</a>
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

    <?php include 'footer.php'; ?>

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
