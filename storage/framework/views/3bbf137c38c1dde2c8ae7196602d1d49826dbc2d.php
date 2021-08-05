

<?php $__env->startSection('title', 'profiles'); ?>
<?php $__env->startSection('content'); ?>

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">No. Telepon</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><a href="/profiles/<?php echo e($profile->id); ?>" ><?php echo e($profile->nama); ?></td>
    <td><?php echo $profile->tgl; ?></td>
    <td><?php echo $profile->jenis; ?></td>
    <td><?php echo $profile->alamat; ?></td>
    <td><?php echo $profile->no_tlp; ?></td>
    <td><?php echo $profile->email; ?></td>
    <td><a href="/profiles/<?php echo e($profile->id); ?>/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/profiles/<?php echo e($profile->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<div>
    <?php echo e($profiles -> links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/profiles/index.blade.php ENDPATH**/ ?>