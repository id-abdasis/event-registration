<?php $__env->startSection('title'); ?>
    Daftar peserta
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Daftar peserta</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">peserta</a></div>
        <div class="breadcrumb-item">Daftar peserta</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Daftar peserta</h2>
      <p class="section-lead">
        Daftar peserta terbaru
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Daftar Peserta yang Mendaftar</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-2">
                  <thead>
                    <tr>
                      <th class="text-center">
                        No
                      </th>
                      <th>Nama Lengkap</th>
                      <th>Jenis Kelamin</th>
                      <th>TTL</th>
                      <th>No HP</th>
                      <th>Asal Sekolah</th>
                      <th>Alamat Lengkap</th>
                      <th>Program Try Out</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $pesertas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $peserta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                          <?php echo e($key+1); ?>

                        </td>
                        <td><?php echo e($peserta->nama_lengkap); ?></td>
                        <td><?php echo e($peserta->jenis_kelamin); ?></td>
                        <td><?php echo e($peserta->tempat_lahir); ?> , <?php echo e($peserta->tanggal_lahir); ?></td>
                        <td><?php echo e($peserta->nomor_telepon); ?></td>
                        <td><?php echo e($peserta->asal_sekolah); ?></td>
                        <td><?php echo e($peserta->alamat_lengkap); ?></td>
                        <td><div class="badge badge-success"><?php echo e($peserta->program_tryout); ?></div></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-libraries'); ?>
<script src="<?php echo e(url('/')); ?>/assets/modules/datatables/datatables.min.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?php echo e(url('/')); ?>/assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo e(asset('assets/modules/prism/prism.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
<script src="<?php echo e(url('/')); ?>/assets/js/page/modules-datatables.js"></script>
<script src="<?php echo e(asset('assets/js/page/bootstrap-modal.js')); ?>"></script>

<script>
  
$('#btnDetail').click(function(event){
  event.preventDefault();
  alert($(this).attr('href'))
  $.ajax({
    url: 'https://himanurafestival.in/peserta/detail-peserta/1',
    type: 'GET',
    success: function (res) { 
        console.log(res)
    }
  })
});

</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css-libraries'); ?>
<link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Server\www\himanurafestival\resources\views/admin/peserta/daftar-peserta.blade.php ENDPATH**/ ?>