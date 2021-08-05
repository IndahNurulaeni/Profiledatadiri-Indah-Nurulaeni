

<?php $__env->startSection('title','Kontaks'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
<div class="cardbody">
<h3>Email :<?php echo e($kontak['email']); ?> </h3>
<h3>No Telepone :<?php echo e($kontak['no_tlp']); ?> </h3>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/kontaks/show.blade.php ENDPATH**/ ?>