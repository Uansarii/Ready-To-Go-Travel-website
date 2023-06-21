<!DOCTYPE html>
<html lang="en">

<head>
   <?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/signin.css">
 

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        body {
            background-image: url(assets/img/signin_bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        fieldset {
            border: 3px solid black;
            border-radius: 5px;
            padding: 10px;
            background-color: #c3c7c5       }

    </style>


</head>

<body class="text-center">
  <main class="form-signin w-100 m-auto" >
    <form method="POST" action="<?php echo e(route('admindash')); ?>">
                    <?php echo csrf_field(); ?>
        <fieldset>
            <img class="mb-4" src="assets\img\signin_logo.png" alt="" width="150" height="150">
            <h1 class="h3 mb-3 fw-normal">Please login as admin to continue</h1>

            <div class="form-floating">
                <input type="email" id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="name@example.com" name="email" required autocomplete="email" autofocus>
                 

                    <?php if($errors->any()): ?>
                     <div class="error">Incorrect credentials</div>
                    <?php endif; ?>
                   
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" placeholder="Password" name="password" required autocomplete="current-password">
                
                <label for="password">Password</label>
            </div>
            <div class="form-floating">
              
            </div>
             <button class="w-100 btn btn-lg btn-primary" type="submit"><?php echo e(__('Login')); ?></button>
            
            <div class="form-floating"> If you're not a user,<a href="<?php echo e(route('register')); ?>">Sign Up</a></div>
            <p class="mt-5 mb-3 text-muted">&copy; 2020–2022</p>
        </fieldset>
    </form>

</main>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>

</body>

</html>




<?php /**PATH C:\Users\cw\new\resources\views/auth/adminlogin.blade.php ENDPATH**/ ?>