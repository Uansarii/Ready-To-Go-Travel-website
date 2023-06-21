<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</head>

<body>

   <!-- ======= Header ======= -->
   <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <br/> <br/>
  <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center" style="background-image: url(assets/img/custom_back.jpg);">
    <div class="container" data-aos="fade-up" >

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150" >
        <div class="col-xl-6 col-lg-8">
          <h1>Customized Trips</h1>
          
        </div>
      </div>

    </div>
  </section><!-- End Hero -->
  <main id="main">
  <div class="container">
    <div class="py-5 text-center">
        <h2>Let's get your journey started!</h2>
        <p class="lead">We will need a few details to tailor the trip to your interests.</p>
    </div>
    <div class="row d-flex justify-content-right">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Contact a Tour Guide</span>
                <img class="d-block mx-auto mb-4" src="assets/img/tour-guide.png"  width="72" height="72">
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 ">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Muhammad Zubair</h6>
                    </div>
                    <span class="text-muted">+923325679098</span>
                </li>
        
                
                <li class="list-group-item d-flex justify-content-between">
                    <span>Aqeel Khwaja</span>
                    <span class="text-muted">+923007173929</span>
                </li>
            </ul>
            
        </div>
        <div class="col-md-8 order-md-1">
            <form method="post" action="<?php echo e(route('customized_bookings',['is_customized'=>true])); ?>">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="d_date">Departure Date</label>
                        <input type="date" class="form-control" id="d_date" name="d_date" placeholder="DD-MM-YYYY" value="" required=""> 
                         <div class="invalid-feedback"> Please select a valid date. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="r_date">Return Date</label>
                        <input type="date" class="form-control" name="r_date" id="r_date" placeholder="DD-MM-YYYY" value="" required=""> 
                    
                        <div class="invalid-feedback"> Please select a valid date. </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="dest">Select Destination</label>
                        <select class="custom-select d-block w-100" id="dest" name="dest" required="">
                            <option value="Kashmir">None</option>
    
                            
                            <option>Swat</option>
                            <option>Naran</option>
                            <option>Fairy Meadows</option>
                            <option>Shogran</option>
                            <option>Murree</option>
                            <option>Panjpeer Rocks</option>
                            <option>Kumrat Valley</option>
    
                        </select>
                        <div class="invalid-feedback"> Please select a Destination </div>
                </div>
                
                <div class="mb-4">
                    <p>Primary Age group of Adults</p>
                    <input type="radio" id="age" name="age" value="18-35">
                    <label for="18-35">18-35 years</label><br>
                    <input type="radio" id="age" name="age" value="36-50" checked="checked">
                    <label for="36-50">36-50 years</label><br>
                    <input type="radio" id="age" name="age" value="51-60">
                    <label for="51-60">51-60 years</label><br>
                    <input type="radio" id="age" name="age" value="60-above">
                    <label for="60-above">60+ years</label><br>
                </div>
                <div class="mb-4">
                    <p>What type of tour are You looking for?</p>
                    <input type="radio" id="tpye" name="type" value="tour-guide">
                    <label for="tour-guide">Custom-made trip with Tour-Guide and/or Driver</label><br>
                    <input type="radio" id="type" name="type" value="acc-only" checked="checked">
                    <label for="acc-only">Custom-made trip with booked accomodations only</label><br>
                    <input type="radio" id="type" name="type" value="group">
                    <label for="group">Guided Group Tour with Fixed Departures</label><br>
                </div>
                <div class="mb-4">
                    <p>Accomodation Options</p>
                    <input type="radio" id="accomodation" name="accomodation" value="non" checked="checked">
                    <label for="non">None</label><br>
                    <input type="radio" id="accomodation" name="accomodation" value="basic">
                    <label for="basic">Basic - 2* Hotel</label><br>
                    <input type="radio" id="accomodation" name="accomodation" value="comfortable">
                    <label for="comfortable">Comfortable - 3* Hotel</label><br>
                    <input type="radio" id="accomodation" name="accomodation" value="luxury">
                    <label for="luxury">Luxury - 4* Hotel</label><br>
                </div>
                
                <div class="mb-3">
                    <label for="price">Approximate Budget </label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Give a rough approximate.">
                </div>
               
                <div class="mb-4">
                    <label for="suggestion">Feel free to add anything! <span class="text-muted">(Optional)</span></label><br/>
                    <textarea id="suggestion" name="suggestion" rows="6" cols="50">
                        Please mention anything you would like us to take care of.
                        </textarea>
                </div>
                
                <hr class="mb-4">
                <div class="text-center">
                    <button style="background-color:#3284aa; width: 200px; border-radius:20px; padding: 10px;"> Start Booking</a></button>
                  </div>
                
                
</main>
<br/>
   <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php /**PATH C:\Users\cw\new\resources\views/customized.blade.php ENDPATH**/ ?>