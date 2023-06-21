<header id="header" class="fixed-top " style="background-color:#3b5733">
    <div class="container d-flex align-items-center justify-content-lg-between">


        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><img src="assets\img\signin_logo.png" width=40 height=40 /></li>
                <li class="dropdown"><a href="#"><span><?php echo e(Auth::user()->name); ?></span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a class="nav-link scrollto" href="<?php echo e(route('logout')); ?>" style="color:#c3c7c5 ">Logout</a></li>
                      </ul></li>
                <li><a class="nav-link scrollto " href="<?php echo e(route('admin')); ?>" style="color:#c3c7c5 ">Dashboard</a></li>
                <li><a class="nav-link scrollto " href="<?php echo e(route('adminreviews')); ?>" style="color:#c3c7c5 ">Reviews</a></li>
                
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header --><?php /**PATH C:\Users\cw\new\resources\views/layouts/adminheader.blade.php ENDPATH**/ ?>