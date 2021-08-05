

<?php $__env->startSection('title','semesters'); ?>

<?php $__env->startSection('content'); ?>

<form action="/semesters" method="POST">
<?php echo csrf_field(); ?>
    <label for="exampleInputEmail1">Semester</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="semesters" aria-describedby="emailHelp" value="<?php echo e(old('semesters')); ?>">
    <?php $__errorArgs = ['semesters'];
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

    

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/semesters/create.blade.php ENDPATH**/ ?>