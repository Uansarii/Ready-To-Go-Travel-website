<!DOCTYPE html>
<html lang="en">

<head>
 @include('layouts.links')

</head>

<body>

   <!-- ======= Header ======= -->
   @include('layouts.header')

  <br/>
  <main id="main">
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <p>Contact Us</p>
          </div>
  
          
          <div class="mapouter">
            <div class="gmap_canvas">
                
              <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.5383535261685!2d73.05400421468147!3d33.72089259256709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbf9999749555%3A0x9a6b343929cfc84f!2sIslamabad%20Travel%20%26%20Tours!5e0!3m2!1sen!2s!4v1671311648562!5m2!1sen!2s" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
  
          <div class="row mt-5">
  
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>office no.1, block 18-a, sector f-7, Islamabad</p>
                </div>
  
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>Shehryarsaqib9@gmail.com</p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Phone:</h4>
                  <p>+923245679191</p>
                </div>
  
              </div>
  
            </div>
  
            <div class="col-lg-8 mt-5 mt-lg-0">
  
              <form action="{{route('contact')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" name="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" id="message"  rows="5" placeholder="Message" required></textarea>
                </div>
                
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
  
    </main><!-- End #main -->
  
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