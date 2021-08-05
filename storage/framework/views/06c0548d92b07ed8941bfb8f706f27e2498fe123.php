

<?php $__env->startSection('title','matakuliahs'); ?>

<?php $__env->startSection('content'); ?>

<form action="/matakuliahs" method="POST">
<?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Matakuliah</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama_matakuliah" aria-describedby="emailHelp" value="<?php echo e(old('nama_matakuliah')); ?>">
    <?php $__errorArgs = ['nama_matakuliah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">SKS</label>
    <input type="text" class="form-control" name="sks" id="exampleInputPassword1" value="<?php echo e(old('sks')); ?>">
    <?php $__errorArgs = ['sks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div class="alert alert-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php $__env->stopSection(); ?>

    

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/matakuliahs/create.blade.php ENDPATH**/ ?>