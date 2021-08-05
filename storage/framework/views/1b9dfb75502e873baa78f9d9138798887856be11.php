

<?php $__env->startSection('title', 'Pendidikans'); ?>
<?php $__env->startSection('content'); ?>

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nama Sekolah / Universitas</th>
      <th scope="col">Tahun</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $pendidikans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><a href="/pendidikans/<?php echo e($p->id); ?>" ><?php echo e($p->nama); ?></td>
    <td><?php echo $p->tahun; ?></td>
    <td><a href="/pendidikans/<?php echo e($p->id); ?>/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/pendidikans/<?php echo e($p->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<div>
    <?php echo e($pendidikans -> links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/pendidikans/index.blade.php ENDPATH**/ ?>