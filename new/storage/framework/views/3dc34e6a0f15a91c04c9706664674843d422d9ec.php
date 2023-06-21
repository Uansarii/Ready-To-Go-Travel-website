

<?php $__env->startSection('content'); ?>
<?php if(Route::has('login')): ?>
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        <a href="<?php echo e(route('logout')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
    <?php else: ?>
        <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log inn</a>
        <a href="<?php echo e(route('logout')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">logout</a>
        <?php if(Route::has('register')): ?>
            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        <?php endif; ?>
    <?php endif; ?>
    
</div>
<?php endif; ?>
<a href="<?php echo e(route('logout')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
<h1><?php if(Auth::check()): ?>
    //show logged in navbasr
  <?php else: ?>
    //show logged out navbar
  <?php endif; ?></h1>
<?php $__env->stopSection(); ?><?php /**PATH C:\Users\cw\new\resources\views/home.blade.php ENDPATH**/ ?>