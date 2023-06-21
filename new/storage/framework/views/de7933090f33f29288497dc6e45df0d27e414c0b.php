<!DOCTYPE html>
<html lang="en">

<head>
<?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

   <!-- ======= Header ======= -->
   <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <br/> <br/>
  <main id="main">
  <div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/img/book.png"  width="72" height="72">
        <h2>Let's get your journey started!</h2>
        <p class="lead">We will need a few details to confirm your booking to provide you with the best experience.</p>
    </div>
    <div class="row">
        
        <div class="col-md-4 order-md-2 mb-4">

            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 ">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0"><?php echo e($place); ?></h6>
                        <small class="text-muted">Package-selected</small>
                    </div>
                    <span class="text-muted"><?php echo e($price); ?></span>
                </li>
        
                
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong><?php echo e($price); ?> PKR</strong>
                </li>
            </ul>
            
        </div>
        
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Booking Details</h4>
            <form method="post" action="<?php echo e(route('bookings',['place'=>$place,'price'=>$price,'is_customized'=>$is_customized])); ?>">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="d_date">Departure Date</label>
                        <input type="date" class="form-control" id="d_date" name="d_date" value="<?php echo e($d_date); ?>" readonly   required=""> 
                        <div class="invalid-feedback"> Please select a valid date. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="r_date">Return Date</label>
                        <input type="date" class="form-control" id="r_date" name="r_date"  value="<?php echo e($r_date); ?>" readonly required=""> 
                    
                        <div class="invalid-feedback"> Please select a valid date. </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstname">First name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="John" required autocomplete="firstname" autofocus>
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastname">Last name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Smith" required autocomplete="lastname" autofocus">
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="cnic">CNIC</label>
                    <input type="text" class="form-control" id="cnic" name="cnic" placeholder="53627-" required="">
                            <?php if($errors->has('cnic')): ?>
                                <div class="error" style="color:red">* CNIC must be of 13 digits</div>
                            <?php endif; ?>
                    <div class="invalid-feedback"> Please enter valid information. </div>
                </div>
                <div class="mb-3">
                    <label for="phoneno">Phone Number</label>
                    <input type="text" class="form-control" id="phoneno" name="phoneno" placeholder="+92" required="">
                    <?php if($errors->has('phoneno')): ?>
                    <div class="error" style="color:red">* Phone number must be of 11 digits</div>
                    <?php endif; ?>
                    <div class="invalid-feedback"> Please enter valid information. </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo e(Auth::user()->email); ?>" readonly required autocomplete="email" autofocus>
                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                </div>
                
                <div class="mb-3">
                    <label for="age">Age <span class="text-muted"></span></label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Applicant should be at-least 18 years of age">
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="adults">Number of Accomponying Persons</label>
                        <select class="custom-select d-block w-100" id="adults" name="adults" required="">
                            <option value="">None</option>
    
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                        <div class="invalid-feedback"> Please select a number </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="children">Children under 3</label>
                        <select class="custom-select d-block w-100" id="children" name="children" required="">
                            <option value="">None</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <div class="invalid-feedback"> Please provide a valid value. </div>
                    </div>
    
                </div>
                <hr class="mb-4">
                
                <div class="container" data-aos="zoom-in">
                    <div class="text-center">
                        <button type="submit" style="background-color:lightgreen; width: 200px; border-radius:20px; padding: 10px;"> Book Now</button>
                    </div>
    
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
<?php /**PATH C:\Users\cw\new\resources\views/bookings.blade.php ENDPATH**/ ?>