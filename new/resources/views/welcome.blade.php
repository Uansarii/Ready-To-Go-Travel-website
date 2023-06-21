<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.links')
</head>

<body>

  @include('layouts.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center" style="background-image: url(assets/img/background.jpg);">
    <div class="container" data-aos="fade-up" >

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150" >
        <div class="col-xl-6 col-lg-8">
          <h1>EXPLORE THE WORLD WITH US!</h1>
          <h2>We are team of adventure seekers</h2>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

  
   
    <!-- ======= Features Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">
        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
           <!-- <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div> -->
            <div class="swiper-slide"><img src="assets/img/services/stay-trip.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/services/food.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/services/transport.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/services/tour-guide.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/services/one-day.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/services/travel-guide.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Places we Love and Recommend!</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">One day</li>
              <li data-filter=".filter-card">Stay trip</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/shogran.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Shogran</h4>
                <p>Visit!</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/shogran.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Shogran"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/naran.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Naran</h4>
                <p>Visit!</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/naran.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Naran"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kumrat.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kumrat Valley</h4>
                <p>Visit!</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kumrat.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kumrat Valley"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/malam-jabba.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Malam Jabba</h4>
                <p>Visit!</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/malam-jabba.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Malam Jabba"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/skardu.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Skardu</h4>
                <p>Visit!</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/skardu.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="skardu"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/hunza.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Hunza</h4>
                <p>Visit!</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/hunza.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Hunza"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kalam.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mahodand Lake - Kalam</h4>
                <p>Visit!</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kalam.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kalam"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kashmir.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ratti Gali - Kashmir</h4>
                <p>Visit!</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/kashmir.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kashmir"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Panjpeer.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Panjpeer Rocks</h4>
                <p>Visit!</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Panjpeer.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Panjpeer"><i class="bx bx-plus"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>

        </div>

      </div> 
    </section> <!-- End Portfolio Section -->

    
</main>
  <!-- ======= Footer ======= -->
  @include('layouts.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>