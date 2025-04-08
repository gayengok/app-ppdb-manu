

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner py-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-gradient-primary text-white">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-user-edit me-2"></i>
                                <h4 class="card-title mb-0 fw-bold">Edit Data Guru</h4>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger alert-dismissible fade show border-start border-danger border-4"
                                    role="alert">
                                    <div class="d-flex">
                                        <i class="fas fa-exclamation-circle me-2 mt-1"></i>
                                        <div>
                                            <strong>Oops!</strong> There were some problems with your input.
                                            <ul class="mt-2 mb-0">
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($error); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            <form action="<?php echo e(route('guru.update', $guru->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="row g-4">
                                    <!-- Kolom Kiri -->
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="nama" class="form-label fw-bold">
                                                <i class="fas fa-user text-primary me-1"></i> Nama
                                            </label>
                                            <input type="text" name="nama"
                                                class="form-control form-control-lg border-0 bg-light" id="nama"
                                                value="<?php echo e($guru->nama); ?>" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="alamat" class="form-label fw-bold">
                                                <i class="fas fa-map-marker-alt text-primary me-1"></i> Alamat
                                            </label>
                                            <input type="text" name="alamat"
                                                class="form-control form-control-lg border-0 bg-light" id="alamat"
                                                value="<?php echo e($guru->alamat); ?>" required>
                                        </div>
                                    </div>

                                    <!-- Kolom Kanan -->
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="email" class="form-label fw-bold">
                                                <i class="fas fa-envelope text-primary me-1"></i> Email
                                            </label>
                                            <input type="email" name="email"
                                                class="form-control form-control-lg border-0 bg-light" id="email"
                                                value="<?php echo e($guru->email); ?>" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="jabatan" class="form-label fw-bold">
                                                <i class="fas fa-briefcase text-primary me-1"></i> Jabatan
                                            </label>
                                            <input type="text" name="jabatan"
                                                class="form-control form-control-lg border-0 bg-light" id="jabatan"
                                                value="<?php echo e($guru->jabatan); ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-4 d-flex justify-content-between">
                                    <a href="<?php echo e(route('guru.index')); ?>" class="btn btn-outline-secondary btn-lg px-4">
                                        <i class="fas fa-arrow-left me-1"></i> Kembali
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-lg px-4">
                                        <i class="fas fa-save me-1"></i> Update Data
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/guru/edit.blade.php ENDPATH**/ ?>