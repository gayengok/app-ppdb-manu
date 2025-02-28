

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-history"></i> Sejarah MA NU Luthful Ulum
                            </h4>
                            <a href="<?php echo e(route('sejarah.create')); ?>" class="btn btn-primary">
                                <i class="fas fa-plus-circle"></i> Tambah
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $sejarahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $sejarah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($sejarahs->firstItem() + $index); ?></td>
                                                <td>
                                                    <img src="<?php echo e(asset('storage/sejarah_images/' . $sejarah->img)); ?>"
                                                        alt="Gambar Sejarah" style="width: 100px; height: auto;">
                                                </td>
                                                <td><?php echo e(\Illuminate\Support\Str::limit($sejarah->deskripsi, 300)); ?></td>

                                                <td class="text-center">
                                                    <!-- Edit and Delete buttons -->
                                                    <div class="d-flex justify-content-center flex-wrap">
                                                        <a href="<?php echo e(route('sejarah.edit', $sejarah->id)); ?>"
                                                            class="btn btn-info btn-icon m-1" title="Edit Sejarah">
                                                            <i class="fas fa-edit" style="font-size: 1.5rem;"></i>
                                                        </a>

                                                        <form action="<?php echo e(route('sejarah.destroy', $sejarah->id)); ?>"
                                                            method="POST" style="display:inline;">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-danger btn-icon m-1"
                                                                title="Hapus Sejarah">
                                                                <i class="fas fa-trash-alt" style="font-size: 1.5rem;"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="4" class="text-center">Data Sejarah Tidak Ditemukan</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/profil/profil.blade.php ENDPATH**/ ?>