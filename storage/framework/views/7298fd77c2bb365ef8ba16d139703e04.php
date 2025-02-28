

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-plus-circle"></i> Tambah - Pengumuman
                            </h4>
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

                        <form action="<?php echo e(route('pengumuman.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label for="judul">Judul Pengumuman</label>
                                <input type="text" name="judul" class="form-control" id="judul"
                                    placeholder="Masukkan Judul Pengumuman" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"
                                    placeholder="Masukkan Deskripsi Pengumuman" required></textarea>
                            </div>

                            <div class="form-group mt-3">
                                <label for="file">Upload File</label>
                                <input type="file" name="file" class="form-control" id="file" required>
                            </div>

                            <div class="form-group mt-4 text-end">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-paper-plane"></i> Kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/pengumuman/create.blade.php ENDPATH**/ ?>