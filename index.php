<?php
  require "config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DocTrip - Travel Agency</title>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />
    <link rel="stylesheet" href="./assets/css/style.css" />
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
  </head>

  <body id="top">
    <header class="header" data-header>
      <div class="overlay" data-overlay></div>
      <div class="header-top">
        <div class="container">
          <a href="tel:+6281269146575" class="helpline-box">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>
            <div class="wrapper">
              <p class="helpline-title">For Further Inquires :</p>
              <p class="helpline-number">+62 (812) 6914 6575</p>
            </div>
          </a>
          <a href="index.php" class="logo">
            <img src="./assets/images/doctrip-white.png" alt="DocTrip logo"/>
          </a>
          <div class="header-btn-group">
            <button class="search-btn" aria-label="Search">
              <ion-icon name="search"></ion-icon>
            </button>
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
              <a href="#" class="social-link">
                <ion-icon name="logo-whatsapp"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-tiktok"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
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
                <a href="#home" class="navbar-link" data-nav-link>home</a>
              </li>
              <li>
                <a href="#about" class="navbar-link" data-nav-link>about us</a>
              </li>
              <li>
                <a href="#trip" class="navbar-link" data-nav-link>trip</a>
              </li>
              <li>
                <a href="#promo" class="navbar-link" data-nav-link>promo</a>
              </li>
              <li>
                <a href="#gallery" class="navbar-link" data-nav-link>gallery</a>
              </li>
              <li>
                <a href="#mitra" class="navbar-link" data-nav-link>mitra</a>
              </li>
              <li>
                <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
              </li>
            </ul>
          </nav>

          <button class="btn btn-light">Book Now</button>
        </div>
      </div>
    </header>

    <main>
      <article>
        <section class="hero" id="home">
          <div class="container">
            <h2 class="h1 hero-title">Travel to<br>the unknown</h2>
            <p class="hero-text">
              Doctor Trip Indonesia berharap dapat menjadi teman perjalanan terbaik bagi kamu Travellers.
              #HealingWithDoctorTrip
            </p>
            <div class="btn-group">
              <button class="btn btn-light">Learn more</button>
              <button class="btn btn-secondary">Book now</button>
            </div>
          </div>
        </section>

        <section class="tour-search" id="about">
          <div class="container">
            <a href="index.php" class="logo">
              <img src="./assets/images/doctrip-white.png" alt="DocTrip logo"/>
            </a>
            <p class="tour-text">
            Doctor Trip Indonesia merupakan badan usaha yang bergerak dibidang tour and travel
            yang menyediakan layanan open trip maupun private trip yang semakin mudah, hemat dan menyenangkan
            ke berbagai destinasi menarik.
            Doctor Trip Indonesia kini sudah menjalin kerjasama dengan berbagai
            penyedia jasa pendukung perjalanan dan menjamin kenyamanan Travellers mulai dari penginapan,
            transportasi, destinasi wisata, serta Travelmate yang sudah berpengalaman untuk menemani liburan kamu agar lebih berkesan.
            </p>
          </div>
        </section>

        <section class="popular" id="trip">
          <div class="container">
            <p class="section-subtitle">Uncover place</p>
            <h2 class="h2 section-title">SPECIAL TRIP</h2>
            <p class="section-text">
              Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec
              nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia
              tenetur, aptent.
            </p>
            <ul class="popular-list">
              <li>
                <div class="popular-card">
                  <figure class="card-img">
                    <a class="popular-link" href="#">
                      <img
                        src="./assets/images/popular-1.jpg"
                        alt="San miguel, italy"
                        loading="lazy"
                      />
                    </a>
                  </figure>
                  <div class="card-content">
                    <div class="card-rating">
                      <p>Rp 2.700.000 / orang</p>
                    </div>
                    <p class="card-subtitle">
                      <a href="#">05/11/2024 ~ 06/11/2024</a>
                    </p>
                    <h3 class="h3 card-title">
                      <a href="#">SPECIAL TRIP GENTING KL</a>
                    </h3>
                    <p class="card-text">
                      GENTING + KUALA LUMPUR
                    </p>
                    <button class="btn-mini">Book now</button>
                  </div>
                </div>
              </li>

              <li>
                <div class="popular-card">
                  <figure class="card-img">
                    <img
                      src="./assets/images/popular-2.jpg"
                      alt="Burj khalifa, dubai"
                      loading="lazy"
                    />
                  </figure>
                  <div class="card-content">
                    <div class="card-rating">
                      <p>Rp 2.700.000 / orang</p>
                    </div>
                    <p class="card-subtitle">
                      <a href="#">05/11/2024 ~ 06/11/2024</a>
                    </p>
                    <h3 class="h3 card-title">
                      <a href="#">SPECIAL TRIP GENTING KL</a>
                    </h3>
                    <p class="card-text">
                      GENTING + KUALA LUMPUR
                    </p>
                    <button class="btn-mini">Book now</button>
                  </div>
                </div>
              </li>

              <li>
                <div class="popular-card">
                  <figure class="card-img">
                    <img
                      src="./assets/images/popular-3.jpg"
                      alt="Kyoto temple, japan"
                      loading="lazy"
                    />
                  </figure>

                  <div class="card-content">
                    <div class="card-rating">
                      <p>Rp 2.700.000 / orang</p>
                    </div>
                    <p class="card-subtitle">
                      <a href="#">05/11/2024 ~ 06/11/2024</a>
                    </p>
                    <h3 class="h3 card-title">
                      <a href="#">SPECIAL TRIP GENTING KL</a>
                    </h3>
                    <p class="card-text">
                      GENTING + KUALA LUMPUR
                    </p>
                    <button class="btn-mini">Book now</button>
                  </div>
                </div>
              </li>
            </ul>
            
            <h2 class="h2 section-title">OPEN TRIP</h2>
            <p class="section-text">
              Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec
              nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia
              tenetur, aptent.
            </p>
            <ul class="popular-list">
              <li>
                <div class="popular-card">
                  <figure class="card-img">
                    <img
                      src="./assets/images/popular-1.jpg"
                      alt="San miguel, italy"
                      loading="lazy"
                    />
                  </figure>
                  <div class="card-content">
                    <div class="card-rating">
                      <p>Rp 2.700.000 / orang</p>
                    </div>
                    <p class="card-subtitle">
                      <a href="#">05/11/2024 ~ 06/11/2024</a>
                    </p>
                    <h3 class="h3 card-title">
                      <a href="#">SPECIAL TRIP GENTING KL</a>
                    </h3>
                    <p class="card-text">
                      GENTING + KUALA LUMPUR
                    </p>
                    <button class="btn-mini">Book now</button>
                  </div>
                </div>
              </li>

              <li>
                <div class="popular-card">
                  <figure class="card-img">
                    <img
                      src="./assets/images/popular-2.jpg"
                      alt="Burj khalifa, dubai"
                      loading="lazy"
                    />
                  </figure>
                  <div class="card-content">
                    <div class="card-rating">
                      <p>Rp 2.700.000 / orang</p>
                    </div>
                    <p class="card-subtitle">
                      <a href="#">05/11/2024 ~ 06/11/2024</a>
                    </p>
                    <h3 class="h3 card-title">
                      <a href="#">SPECIAL TRIP GENTING KL</a>
                    </h3>
                    <p class="card-text">
                      GENTING + KUALA LUMPUR
                    </p>
                    <button class="btn-mini">Book now</button>
                  </div>
                </div>
              </li>

              <li>
                <div class="popular-card">
                  <figure class="card-img">
                    <img
                      src="./assets/images/popular-3.jpg"
                      alt="Kyoto temple, japan"
                      loading="lazy"
                    />
                  </figure>

                  <div class="card-content">
                    <div class="card-rating">
                      <p>Rp 2.700.000 / orang</p>
                    </div>
                    <p class="card-subtitle">
                      <a href="#">05/11/2024 ~ 06/11/2024</a>
                    </p>
                    <h3 class="h3 card-title">
                      <a href="#">SPECIAL TRIP GENTING KL</a>
                    </h3>
                    <p class="card-text">
                      GENTING + KUALA LUMPUR
                    </p>
                    <button class="btn-mini">Book now</button>
                  </div>
                </div>
              </li>
            </ul>

            <button class="btn btn-light">More Trip</button>
            <br>
            <h2 class="h2 section-title">PRIVATE TRIP</h2>
            <p class="section-text">
              Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec
              nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia
              tenetur, aptent.
            </p>
            <ul class="popular-list">
              <li>
                <div class="popular-card">
                  <figure class="card-img">
                    <a class="popular-link" href="#">
                      <img
                        src="./assets/images/popular-1.jpg"
                        alt="San miguel, italy"
                        loading="lazy"
                      />
                    </a>
                  </figure>
                  <div class="card-content">
                    <div class="card-rating">
                      <p>Rp 2.700.000 / orang</p>
                    </div>
                    <p class="card-subtitle">
                      <a href="#">05/11/2024 ~ 06/11/2024</a>
                    </p>
                    <h3 class="h3 card-title">
                      <a href="#">SPECIAL TRIP GENTING KL</a>
                    </h3>
                    <p class="card-text">
                      GENTING + KUALA LUMPUR
                    </p>
                    <button class="btn-mini">Book now</button>
                  </div>
                </div>
              </li>

              <li>
                <div class="popular-card">
                  <figure class="card-img">
                    <img
                      src="./assets/images/popular-2.jpg"
                      alt="Burj khalifa, dubai"
                      loading="lazy"
                    />
                  </figure>
                  <div class="card-content">
                    <div class="card-rating">
                      <p>Rp 2.700.000 / orang</p>
                    </div>
                    <p class="card-subtitle">
                      <a href="#">05/11/2024 ~ 06/11/2024</a>
                    </p>
                    <h3 class="h3 card-title">
                      <a href="#">SPECIAL TRIP GENTING KL</a>
                    </h3>
                    <p class="card-text">
                      GENTING + KUALA LUMPUR
                    </p>
                    <button class="btn-mini">Book now</button>
                  </div>
                </div>
              </li>

              <li>
                <div class="popular-card">
                  <figure class="card-img">
                    <img
                      src="./assets/images/popular-3.jpg"
                      alt="Kyoto temple, japan"
                      loading="lazy"
                    />
                  </figure>

                  <div class="card-content">
                    <div class="card-rating">
                      <p>Rp 2.700.000 / orang</p>
                    </div>
                    <p class="card-subtitle">
                      <a href="#">05/11/2024 ~ 06/11/2024</a>
                    </p>
                    <h3 class="h3 card-title">
                      <a href="#">SPECIAL TRIP GENTING KL</a>
                    </h3>
                    <p class="card-text">
                      GENTING + KUALA LUMPUR
                    </p>
                    <button class="btn-mini">Book now</button>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <section class="package" id="promo">
          <div class="container">
            <p class="section-subtitle">Popular Promo</p>

            <h2 class="h2 section-title">Checkout Our Promo</h2>

            <p class="section-text">
              Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec
              nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia
              tenetur, aptent.
            </p>

            <ul class="package-list">
              <li>
                <div class="package-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/packege-1.jpg"
                      alt="Experience The Great Holiday On Beach"
                      loading="lazy"
                    />
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      Experience The Great Holiday On Beach
                    </h3>

                    <p class="card-text">
                      Laoreet, voluptatum nihil dolor esse quaerat mattis
                      explicabo maiores, est aliquet porttitor! Eaque, cras,
                      aspernatur.
                    </p>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="time"></ion-icon>

                          <p class="text">7D/6N</p>
                        </div>
                      </li>

                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="people"></ion-icon>

                          <p class="text">pax: 10</p>
                        </div>
                      </li>

                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="location"></ion-icon>

                          <p class="text">Malaysia</p>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="card-price">
                    <div class="wrapper">
                      <p class="reviews">(25 reviews)</p>

                      <div class="card-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </div>

                    <p class="price">
                      $750
                      <span>/ per person</span>
                    </p>

                    <button class="btn btn-secondary">Book Now</button>
                  </div>
                </div>
              </li>

              <li>
                <div class="package-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/packege-2.jpg"
                      alt="Summer Holiday To The Oxolotan River"
                      loading="lazy"
                    />
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      Summer Holiday To The Oxolotan River
                    </h3>

                    <p class="card-text">
                      Laoreet, voluptatum nihil dolor esse quaerat mattis
                      explicabo maiores, est aliquet porttitor! Eaque, cras,
                      aspernatur.
                    </p>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="time"></ion-icon>

                          <p class="text">7D/6N</p>
                        </div>
                      </li>

                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="people"></ion-icon>

                          <p class="text">pax: 10</p>
                        </div>
                      </li>

                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="location"></ion-icon>

                          <p class="text">Malaysia</p>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="card-price">
                    <div class="wrapper">
                      <p class="reviews">(20 reviews)</p>

                      <div class="card-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </div>

                    <p class="price">
                      $520
                      <span>/ per person</span>
                    </p>

                    <button class="btn btn-secondary">Book Now</button>
                  </div>
                </div>
              </li>

              <li>
                <div class="package-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/packege-3.jpg"
                      alt="Santorini Island's Weekend Vacation"
                      loading="lazy"
                    />
                  </figure>

                  <div class="card-content">
                    <h3 class="h3 card-title">
                      Santorini Island's Weekend Vacation
                    </h3>

                    <p class="card-text">
                      Laoreet, voluptatum nihil dolor esse quaerat mattis
                      explicabo maiores, est aliquet porttitor! Eaque, cras,
                      aspernatur.
                    </p>

                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="time"></ion-icon>

                          <p class="text">7D/6N</p>
                        </div>
                      </li>

                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="people"></ion-icon>

                          <p class="text">pax: 10</p>
                        </div>
                      </li>

                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="location"></ion-icon>

                          <p class="text">Malaysia</p>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="card-price">
                    <div class="wrapper">
                      <p class="reviews">(40 reviews)</p>

                      <div class="card-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </div>

                    <p class="price">
                      $660
                      <span>/ per person</span>
                    </p>

                    <button class="btn btn-secondary">Book Now</button>
                  </div>
                </div>
              </li>
            </ul>

            <button class="btn btn-light">View All Promo</button>
          </div>
        </section>

        <section class="gallery" id="gallery">
          <div class="container">
            <p class="section-subtitle">Photo Gallery</p>

            <h2 class="h2 section-title">Photo's From Travellers</h2>

            <p class="section-text">
              Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec
              nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia
              tenetur, aptent.
            </p>

            <ul class="gallery-list">
              <li class="gallery-item">
                <figure class="gallery-image">
                  <img
                    src="./assets/images/gallery-1.jpg"
                    alt="Gallery image"
                  />
                </figure>
              </li>

              <li class="gallery-item">
                <figure class="gallery-image">
                  <img
                    src="./assets/images/gallery-2.jpg"
                    alt="Gallery image"
                  />
                </figure>
              </li>

              <li class="gallery-item">
                <figure class="gallery-image">
                  <img
                    src="./assets/images/gallery-3.jpg"
                    alt="Gallery image"
                  />
                </figure>
              </li>

              <li class="gallery-item">
                <figure class="gallery-image">
                  <img
                    src="./assets/images/gallery-4.jpg"
                    alt="Gallery image"
                  />
                </figure>
              </li>

              <li class="gallery-item">
                <figure class="gallery-image">
                  <img
                    src="./assets/images/gallery-5.jpg"
                    alt="Gallery image"
                  />
                </figure>
              </li>
            </ul>
            <br>
            <button class="btn btn-light">View More Image</button>
          </div>
        </section>

        <section class="banner" id="mitra">
          <div class="banner__wrapper">
            <div class="banner__card">
              <img src="assets/images/mitra/indako.png" width="270" height="400" alt="banner" />
              <div class="banner__content">indako</div>
            </div>
            <div class="banner__card">
              <img src="assets/images/mitra/ace.png" width="270" height="400" alt="banner" />
              <div class="banner__content">ace ware</div>
            </div>
            <div class="banner__card">
              <img src="assets/images/mitra/kim.png" width="270" height="400" alt="banner" />
              <div class="banner__content">kim</div>
            </div>
            <div class="banner__card">
              <img src="assets/images/mitra/telkomsel.png" width="270" height="400" alt="banner" />
              <div class="banner__content">telkomsel</div>
            </div>
            <div class="banner__card">
              <img src="assets/images/mitra/informa.png" width="270" height="400" alt="banner" />
              <div class="banner__content">informa</div>
            </div>
            <div class="banner__card">
              <img src="assets/images/mitra/permata.png" width="270" height="400" alt="banner" />
              <div class="banner__content">bank permata</div>
            </div>
            <div class="banner__card">
              <img src="assets/images/mitra/pln.png" width="270" height="400" alt="banner" />
              <div class="banner__content">pln</div>
            </div>
            <div class="banner__card">
              <img src="assets/images/mitra/pertamina.png" width="270" height="400" alt="banner" />
              <div class="banner__content">pertamina</div>
            </div>
          </div>
        </section>

        <section class="cta" id="contact">
          <div class="container">
            <div class="cta-content">
              <p class="section-subtitle">Call To Action</p>

              <h2 class="h2 section-title">
                Ready For Unforgatable Travel. Remember Us!
              </h2>

              <p class="section-text">
                Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec
                nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia
                tenetur, aptent.
              </p>
            </div>

            <button class="btn btn-secondary">Contact Us !</button>
          </div>
        </section>

        <section class="maps" id="maps">
          <iframe class="maps-loc" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.049748527886!2d98.64835081479283!3d3.576038251377126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f1439f52777%3A0x5727ce374aa67660!2sDoctor%20Trip%20Indonesia!5e0!3m2!1sen!2sid!4v1676436638774!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
      </article>
    </main>

    <footer class="footer">
      <div class="footer-top">
        <div class="container">
          <div class="footer-brand">
            <a href="#" class="logo">
              <img src="./assets/images/doctrip-white.png" alt="DocTrip logo" />
            </a>

            <p class="footer-text">
              Urna ratione ante harum provident, eleifend, vulputate molestiae
              proin fringilla, praesentium magna conubia at perferendis,
              pretium, aenean aut ultrices.
            </p>
          </div>

          <div class="footer-contact">
            <h4 class="contact-title">Contact Us</h4>

            <p class="contact-text">Feel free to contact and reach us !!</p>

            <ul>
              <li class="contact-item">
                <ion-icon name="call-outline"></ion-icon>

                <a href="tel:+01123456790" class="contact-link"
                  >+62 (812) 6914 6575</a
                >
              </li>

              <li class="contact-item">
                <ion-icon name="mail-outline"></ion-icon>

                <a href="mailto:info.DocTrip.com" class="contact-link"
                  >info.DocTrip.com</a
                >
              </li>

              <li class="contact-item">
                <ion-icon name="location-outline"></ion-icon>

                <address>3146 Koontz, California</address>
              </li>
            </ul>
          </div>

          <div class="footer-form">
            <p class="form-text">
              Subscribe our newsletter for more update & news !!
            </p>

            <form action="" class="form-wrapper">
              <input
                type="email"
                name="email"
                class="input-field"
                placeholder="Enter Your Email"
                required
              />

              <button type="submit" class="btn btn-secondary">Subscribe</button>
            </form>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <p class="copyright">
            &copy; 2024 <a href="">DocTrip</a>. All rights reserved
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
