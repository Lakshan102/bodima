<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .hello { color: blue; }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div><h1>account</h1></div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    console.log("Home Page Loaded");
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /opt/lampp/htdocs/bodima/bodima/resources/views/acc.blade.php ENDPATH**/ ?>