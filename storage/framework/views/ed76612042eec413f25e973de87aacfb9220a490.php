

<?php $__env->startSection('title','works'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
<div class="cardbody">
<h3>Posisi :<?php echo e($work['posisi']); ?> </h3>
<h3>Nama :<?php echo e($work['nama']); ?> </h3>
<h3>Tahun :<?php echo e($work['tahun']); ?> </h3>
 </div>
</div>
<?php $__env->stopSection(); ?>

    

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/works/show.blade.php ENDPATH**/ ?>