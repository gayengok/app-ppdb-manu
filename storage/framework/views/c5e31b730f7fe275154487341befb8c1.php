

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-edit"></i> Edit Sejarah
                            </h4>
                        </div>

                        <div class="card-body">
                            <form action="<?php echo e(route('sejarah.update', $sejarah->id)); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="20" required><?php echo e($sejarah->deskripsi); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="img">Gambar (Opsional)</label>

                                    <!-- Tampilkan gambar jika ada -->
                                    <?php if($sejarah->img): ?>
                                        <div class="mb-3">
                                            <!-- Pastikan 'storage/' adalah path yang benar menuju gambar -->
                                            <img src="<?php echo e(asset('storage/sejarah_images/' . $sejarah->img)); ?>"
                                                alt="Gambar Sejarah" class="img-thumbnail" style="max-height: 200px;">
                                        </div>
                                    <?php endif; ?>

                                    <input type="file" name="img" id="img" class="form-control"
                                        accept="image/*">
                                    <small>Biarkan kosong jika tidak ingin mengubah gambar</small>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Update
                                    </button>
                                    <a href="<?php echo e(route('sejarah.index')); ?>" class="btn btn-secondary">
                                        <i class="fas fa-arrow-left"></i> Kembali
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/profil/edit.blade.php ENDPATH**/ ?>