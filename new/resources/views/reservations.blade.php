<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.links')
<style>
    .centertheimg {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
    </style>

</head>

<body>

  <!-- ======= Header ======= -->
 @include('layouts.header')
  <main id="main">
    <!-- ======= Packages Section ======= -->
    <br><br>
    <section id="reservations" class="reservations">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Reservations</h2>
                <p>List of the tours you have confirmed! </p>
            </div>

            <div class="row">
                

                @if($reservations == null)
                <div class="section-title">
                    <p style="text-align: center; color: #3ee310">You currently have no reservations :(<p>
                        <br>
                    <img src="assets/img/nobookings.jpg"  class="centertheimg"  width="200px"
                    height="200px";>
                    <br>
                    <p style="text-align: center">Visit the packages or customize your own trip! </p>
                </div>
                <br><br><br><br><br>
                @else
                    @foreach ($reservations as $res)
                        
                    
                    <div class="col-lg-4 col-md-6  align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200" style="padding-bottom: 20px">
                        <div class="icon-box" style=" ;background-color: #c3c7c5; background-size:cover;"> 
                            <div style="background-color: #c3c7c5 ; border-radius: 10px ;">
                                <h4><a href="">{{$res->dest}} </a></h4>
                                <img src="data:image/jpg;base64,{{chunk_split(base64_encode($res->image))}}" width="100" height="100">
                                <p> Departure-Date: {{$res->d_date}}</p>
                                <p> Return-Date: {{$res->r_date}}</p>
                                <p> Price: {{$res->price}} PKR</p>
                                <p> Number Of People: {{$res->adults}}</p>
                                <div class="portfolio-links">
                                    <a href="{{route('destroy',['id'=>$res->id])}}" title="Delete Reservation"><i class="bi bi-x-square-fill"></i></a>
                                    
                                </div>
                            </div> 
                        </div>
                    </div>
                    @endforeach
                @endif  
        </div>
    </section><!-- End Packages Section -->
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