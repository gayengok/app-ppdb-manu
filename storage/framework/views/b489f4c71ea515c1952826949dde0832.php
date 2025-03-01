

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0"><i class="fas fa-edit"></i> Edit Data Siswa Kelas 10</h4>
                        </div>
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <form action="<?php echo e(route('kelas-10.update', $kelasSepuluh->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="mb-3">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="text" class="form-control" id="nisn" name="nisn"
                                        value="<?php echo e($kelasSepuluh->nisn); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="full_name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        value="<?php echo e($kelasSepuluh->full_name); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="gender" name="gender" required>
                                        <option value="Laki-laki"
                                            <?php echo e($kelasSepuluh->gender == 'Laki-laki' ? 'selected' : ''); ?>>
                                            Laki-laki
                                        </option>
                                        <option value="Perempuan"
                                            <?php echo e($kelasSepuluh->gender == 'Perempuan' ? 'selected' : ''); ?>>
                                            Perempuan
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="address" name="address" required><?php echo e($kelasSepuluh->address); ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="Aktif" <?php echo e($kelasSepuluh->status == 'Aktif' ? 'selected' : ''); ?>>
                                            Aktif
                                        </option>
                                        <option value="Tidak Aktif"
                                            <?php echo e($kelasSepuluh->status == 'Tidak Aktif' ? 'selected' : ''); ?>>
                                            Tidak Aktif
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Update
                                </button>
                                <a href="<?php echo e(route('kelas-10.index')); ?>" class="btn btn-secondary">
                                    <i class="fa fa-arrow-left"></i> Kembali
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/data-siswa/kelas-10/edit-data-kelas-10.blade.php ENDPATH**/ ?>