

<?php $__env->startSection('title','Data Pendidikans'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
<div class="cardbody">
<h3>nama :<?php echo e($p['nama']); ?> </h3>
<h3>tahun :<?php echo e($p['tahun']); ?> </h3>
 </div>
</div>
<?php $__env->stopSection(); ?>

    

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/pendidikans/show.blade.php ENDPATH**/ ?>