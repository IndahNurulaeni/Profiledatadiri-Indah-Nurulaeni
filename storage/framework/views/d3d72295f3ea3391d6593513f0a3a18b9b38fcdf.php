

<?php $__env->startSection('title', 'Kontaks'); ?>
<?php $__env->startSection('content'); ?>

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">No. Telepone</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $kontaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><a href="/kontaks/<?php echo e($kontak->id); ?>" ><?php echo e($kontak->email); ?></td>
    <td><?php echo $kontak->no_tlp; ?></td>
    <td><a href="/kontaks/<?php echo e($kontak->id); ?>/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/kontaks/<?php echo e($kontak->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<div>
    <?php echo e($kontaks -> links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/kontaks/index.blade.php ENDPATH**/ ?>