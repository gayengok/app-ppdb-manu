


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Data - Masuk Siswa
                            </h4>
                        </div>
                        <div class="card-body">

                            <form method="GET" action="<?php echo e(route('admin.students.index')); ?>" class="mb-4">
                                <div class="input-group shadow-sm">
                                    <input type="text" name="search" class="form-control rounded-start"
                                        placeholder="Cari nama lengkap atau nama panggilan..."
                                        value="<?php echo e(request('search')); ?>" style="border: 1px solid #ced4da; padding: 10px;">
                                    <button type="submit" class="btn btn-primary rounded-end">
                                        <i class="fas fa-search"></i> Cari
                                    </button>
                                </div>
                            </form>


                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Nama Panggilan</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Email</th>
                                            <th>No. HP</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($student->nama_lengkap); ?></td>
                                                <td><?php echo e($student->nama_panggilan); ?></td>
                                                <td><?php echo e($student->jenis_kelamin); ?></td>
                                                <td><?php echo e($student->email); ?></td>
                                                <td><?php echo e($student->no_hp); ?></td>
                                                <td>
                                                    <div style="display: flex; gap: 10px; align-items: center;">
                                                        <a href="<?php echo e(route('admin.students.show', $student->id)); ?>"
                                                            class="btn btn-info" title="Detail">
                                                            <i class="fas fa-info-circle"></i>
                                                        </a>

                                                        <form action="<?php echo e(route('admin.students.destroy', $student->id)); ?>"
                                                            method="POST" style="display:inline;">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <p>Showing <?php echo e($students->firstItem()); ?> to <?php echo e($students->lastItem()); ?> of
                                        <?php echo e($students->total()); ?> entries</p>
                                </div>
                                <div>
                                    <?php echo e($students->links('pagination::bootstrap-4')); ?>

                                </div>
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

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/students/siswa-baru.blade.php ENDPATH**/ ?>