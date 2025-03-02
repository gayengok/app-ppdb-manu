

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Upload - Pengumuman Hasil Siswa Baru
                            </h4>
                            <a href="<?php echo e(route('pengumuman.create')); ?>" class="btn btn-primary">
                                <i class="fas fa-plus-circle"></i> Tambah
                            </a>
                        </div>

                        <!-- Tampilkan pesan sukses jika ada -->
                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>File</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><?php echo e($item->judul); ?></td>
                                                <td><?php echo e(Str::limit($item->deskripsi, 30)); ?></td>
                                                <td>
                                                    <?php if($item->file_path): ?>
                                                        <a href="<?php echo e(asset('storage/' . $item->file_path)); ?>"
                                                            target="_blank">
                                                            <i class="fas fa-download"></i> Download
                                                        </a>
                                                    <?php else: ?>
                                                        No File
                                                    <?php endif; ?>
                                                </td>

                                                <td class="text-center">
                                                    <!-- Edit and Delete buttons -->
                                                    <div class="d-flex justify-content-center flex-wrap">
                                                        <a href="<?php echo e(route('pengumuman.edit', $item->id)); ?>"
                                                            class="btn btn-info btn-icon m-1" title="Edit Artikel">
                                                            <i class="fas fa-edit" style="font-size: 1.5rem;"></i>
                                                        </a>

                                                        <form action="<?php echo e(route('pengumuman.destroy', $item->id)); ?>"
                                                            method="POST" style="display:inline;">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-danger btn-icon m-1"
                                                                title="Hapus Artikel">
                                                                <i class="fas fa-trash-alt" style="font-size: 1.5rem;"></i>
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

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/pengumuman/upload.blade.php ENDPATH**/ ?>