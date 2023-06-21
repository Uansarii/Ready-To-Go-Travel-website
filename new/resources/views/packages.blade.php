<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.links')

</head>
<body>

  <!-- ======= Header ======= -->
  
  @include('layouts.header')
  <main id="main">
    <!-- ======= Packages Section ======= -->
    <br><br>
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Popular Tour Packages</h2>
          <p>Make your vacations worthwhile with us. </p>
        </div>

        <div class="row">


          @foreach ($package as $pkg)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            {{-- <div class="icon-box" style="background-image: url(data:image/jpg;base64,{{chunk_split(base64_encode($pkg->image))}}); background-size:cover;"> --}}
              <div class="icon-box" style="background-image: url({{$pkg->image}}); background-size:cover;">
              <div style="background-color: #c3c7c5 ; border-radius: 10px ;"><h4><a href="">{{$pkg->name}} </a></h4>
              <p>{{$pkg->description}}</p>
              <div class="portfolio-links">
                <a href="{{route($pkg->route)}}" title="More Details"><i class="bx bx-link"></i></a>
              </div></div>
            </div>
          </div>
          @endforeach
          

        </div>

      </div>
    </section><!-- End Packages Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Our team will accompany you at your trips to make you feel at home!</p>
        </div>

        <div class="row">

          @foreach ($pro as $item)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="data:image/jpg;base64,{{chunk_split(base64_encode($item->image))}}" class="img-fluid " alt="" style="width: 400px; height:350px;">
              </div>
              <div class="member-info">
                <h4>{{$item->name}}</h4>
                <span>{{$item->role}}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

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