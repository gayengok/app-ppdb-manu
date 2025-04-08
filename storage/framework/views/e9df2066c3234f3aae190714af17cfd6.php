


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Verifikasi Data Calon Siswa
                            </h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($student->nama_lengkap); ?></td>
                                                <td><?php echo e($student->jenis_kelamin); ?></td>
                                                <td><?php echo e($student->email); ?></td>


                                                <td class="text-center">
                                                    <span
                                                        class="badge 
                                                        <?php if($student->status == 'Terima'): ?> bg-success 
                                                        <?php elseif($student->status == 'Tidak Terima'): ?> bg-danger 
                                                        <?php else: ?> bg-warning text-white <?php endif; ?>"
                                                        style="padding: 10px 15px; font-size: 12px; font-weight: bold;">
                                                        <i
                                                            class="fas 
                                                            <?php if($student->status == 'Terima'): ?> fa-check-circle 
                                                            <?php elseif($student->status == 'Tidak Terima'): ?> fa-times-circle 
                                                            <?php else: ?> fa-spinner <?php endif; ?>"></i>
                                                        <?php echo e($student->status ?? 'Proses'); ?>

                                                    </span>
                                                </td>

                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center flex-wrap gap-2">
                                                        <form action="<?php echo e(route('student.updateStatus', $student->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <input type="hidden" name="status" value="Terima">
                                                            <button type="submit" class="btn btn-success btn-sm">
                                                                <i class="fas fa-check-circle"></i> Terima
                                                            </button>
                                                        </form>

                                                        <form action="<?php echo e(route('student.updateStatus', $student->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <input type="hidden" name="status" value="Tidak Terima">
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fas fa-times-circle"></i> Tidak Terima
                                                            </button>
                                                        </form>

                                                        <form action="<?php echo e(route('student.updateStatus', $student->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <input type="hidden" name="status" value="Proses">
                                                            <button type="submit" class="btn btn-warning btn-sm">
                                                                <i class="fas fa-undo"></i> Reset
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>



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
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if(session('success')): ?>
                Swal.fire({
                    title: 'Berhasil!',
                    text: '<?php echo e(session('success')); ?>',
                    icon: 'success',
                    iconColor: '#28A745',
                    background: '#ffffff',
                    color: '#333',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#28A745',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    },
                    backdrop: `rgba(0, 0, 0, 0.3)`
                });
            <?php endif; ?>
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/students/hasil-seleksi.blade.php ENDPATH**/ ?>