

<?php $__env->startSection('title', 'Works'); ?>
<?php $__env->startSection('content'); ?>

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Posisi Jabatan</th>
      <th scope="col">Nama Perusahaan</th>
      <th scope="col">Tahun</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><a href="/works/<?php echo e($work->id); ?>" ><?php echo e($work->posisi); ?></td>
    <td><a href="/works/<?php echo e($work->id); ?>" ><?php echo e($work->nama); ?></td>
    <td><?php echo $work->tahun; ?></td>
    <td><a href="/works/<?php echo e($work->id); ?>/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/works/<?php echo e($work->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<div>
    <?php echo e($works -> links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/works/index.blade.php ENDPATH**/ ?>