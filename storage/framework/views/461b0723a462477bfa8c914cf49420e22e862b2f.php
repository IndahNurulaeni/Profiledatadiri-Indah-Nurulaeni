

<?php $__env->startSection('title','Students'); ?>

<?php $__env->startSection('content'); ?>
        
<div class="card shadow mb-3">
            <div class="card-header py-3">  
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Mahasiswa</th>
                      <th>Alamat</th>
                      <th>No Telepon</th> 
                      <th>Email</th>
                    </tr>
                <tbody>
                  <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td> <?php echo e($student['nama_mahasiswa']); ?> </td>
                    <td> <?php echo e($student['alamat']); ?> </td>
                    <td> <?php echo e($student['no_tlp']); ?> </td>
                    <td> <?php echo e($student['email']); ?> </td>
                    <td> <a href="/students/<?php echo e($student['id']); ?>/edit">Edit Data
                    </td>
                    <td> <form action="/students/<?php echo e($student['id']); ?>" method="post">
                       <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button class="card-link btn-danger">Hapus Data</button> </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>

          </div>
        <!-- End of Main Content -->

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/students/<?php echo e($student['id']); ?>" method="POST">

          <?php echo csrf_field(); ?>

      <div class="modal-body">
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Nomor Telepon</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="no_tlp" name="no_tlp">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputtext3" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="email" name="email">
            </div>
          </div>
      
        
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Input</button>
      </div>
    </form>
    </div>
  </div>
</div>
<div>
    <?php echo e($students -> links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/students/edit.blade.php ENDPATH**/ ?>