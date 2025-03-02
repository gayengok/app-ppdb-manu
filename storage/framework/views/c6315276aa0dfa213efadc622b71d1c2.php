

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-user-graduate"></i> Data - Siswa Kelas 10
                            </h4>

                            <a href="<?php echo e(route('kelas-10.create')); ?>" class="btn btn-primary mb-3">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>

                        
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oops!</strong> Ada beberapa masalah dengan inputan Anda:
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th style="text-align: center;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $kelasSepuluhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelasSepuluh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($kelasSepuluh->nisn); ?></td>
                                                <td><?php echo e($kelasSepuluh->full_name); ?></td>
                                                <td><?php echo e(ucfirst($kelasSepuluh->gender)); ?></td>
                                                <td><?php echo e($kelasSepuluh->address); ?></td>
                                                <td>
                                                    <?php if($kelasSepuluh->status === 'Aktif'): ?>
                                                        <span class="badge bg-success"
                                                            style="font-size: 1rem; padding: 0.5rem 1rem;">Aktif</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-danger"
                                                            style="font-size: 1rem; padding: 0.5rem 1rem;">Tidak
                                                            Aktif</span>
                                                    <?php endif; ?>
                                                </td>

                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                                                        <!-- Tombol Edit -->
                                                        <a href="<?php echo e(route('kelas-10.edit', $kelasSepuluh->id)); ?>"
                                                            class="btn btn-warning d-flex align-items-center">
                                                            <i class="fas fa-edit"></i>
                                                        </a>

                                                        <!-- Form Hapus -->
                                                        <form action="<?php echo e(route('kelas-10.destroy', $kelasSepuluh->id)); ?>"
                                                            method="POST" class="d-inline">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit"
                                                                class="btn btn-danger d-flex align-items-center"
                                                                onclick="return confirm('Anda yakin ingin menghapus data siswa ini?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data siswa tersedia.</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <script src="<?php echo e(asset('siswa/js/siswa.js')); ?>"></script>

                        <script src="<?php echo e(asset('popup/js/popup.js')); ?>"></script>
                        <?php if(session('success')): ?>
                            <meta name="success-message" content="<?php echo e(session('success')); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/data-siswa/kelas-10/data-kelas-10.blade.php ENDPATH**/ ?>