<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</head>

<body>
    <!-- ======= Header ======= -->
    <?php echo $__env->make('layouts.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Table -->
    <!-- ============================================================== -->
    <br><br><br>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title">Table for the Admin</h4>
                            <h5 class="card-subtitle" style="color:#3b5733">Overview of Customer Reservations.</h5>
                        </div>
                    </div>
                    <!-- title -->
                </div>
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">CNIC</th>
                                <th class="border-top-0">First Name</th>
                                <th class="border-top-0">Last Name</th>
                                <th class="border-top-0">Phone Number</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Destination</th>
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                           
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <h4 class="m-b-0 font-16"><?php echo e($trip->cnic); ?></h4>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo e($trip->firstname); ?></td>
                                <td><?php echo e($trip->lastname); ?></td>
                                <td><?php echo e($trip->phoneno); ?></td>
                                <td><?php echo e($trip->email); ?></td>
                                <td><?php echo e($trip->dest); ?></td>
                                <td><?php echo e($trip->d_date); ?></td>
                                <td><?php echo e($trip->r_date); ?></td>
                                <td>
                                    <h5 class="m-b-0">PKR <?php echo e($trip->price); ?></h5>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- ======= Footer ======= -->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
</body>

</html>
<?php /**PATH C:\Users\cw\new\resources\views/admindashboard.blade.php ENDPATH**/ ?>