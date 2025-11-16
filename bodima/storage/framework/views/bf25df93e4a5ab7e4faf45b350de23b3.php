<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .hello { color: blue; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div id="hero" class="col-12 min-vh-100 text-center align-items-center">
        <img src="<?php echo e(asset('images/img.jpeg')); ?>" alt="Hero Image" style="width:100%; height:100%; position:absolute; z-index:-1; object-fit:cover; opacity:0.7;">
        <h1 class="hero-text">Welcome Thibirigasyaya Our Boarding House</h1>
        <h3 style="padding-top: 50px; color: #efe0e0;">This is Our place</h3>

    </div>
    <div class="container">
        <h1><b>Come and see our house</b></h1>
        <a id="b1" type="button" name="location" href="https://goo.gl/maps/kKGUKsnm9VLVcoRg8" class="btn">Location</a>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    console.log("Home Page Loaded");
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /opt/lampp/htdocs/bodima/bodima/resources/views/home.blade.php ENDPATH**/ ?>