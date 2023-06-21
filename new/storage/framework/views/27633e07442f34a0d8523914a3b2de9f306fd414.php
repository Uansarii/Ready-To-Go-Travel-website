<!DOCTYPE html>
<html lang="en">

<head>
<?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

   <!-- ======= Header ======= -->
   <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <br/> <br/>
  <main id="main">
  <div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets\img\confirm.png"  width="200" height="200">
        <h2>Welcome Aboard!</h2>
        <p class="lead">Kindly check your email for confirmation and package details.<br/><small> <small></small></p>
    
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 order-md-2 mb-4">
            <ul class="list-group mb-3 ">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0"><?php echo e($location); ?></h6>
                        <small class="text-muted">Package-selected</small>
                    </div>
                    
                </li>
        
                
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>
                        <?php echo e($price); ?></strong>
                </li>
            </ul>
            
       
</main>
<br/>
   <!-- ======= Footer ======= -->
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
<?php /**PATH C:\Users\cw\new\resources\views/confirm.blade.php ENDPATH**/ ?>