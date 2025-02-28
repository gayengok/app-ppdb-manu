


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Data - Document Siswa Baru
                            </h4>

                        </div>
                        <!-- Menampilkan Pesan Sukses -->
                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <form method="GET" action="<?php echo e(route('admin.dokumen.index')); ?>" class="mb-4">
                                <div class="input-group shadow-sm">
                                    <input type="text" name="search" class="form-control rounded-start"
                                        placeholder="Cari nama..." value="<?php echo e(request('search')); ?>"
                                        style="border: 1px solid #ced4da; padding: 10px;">
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
                                            <th>Nama</th>
                                            <th>KK</th>
                                            <th>Akta Kelahiran</th>
                                            <th>KIP/PKH</th>
                                            <th>KTP Orang Tua</th>
                                            <th>Ijazah/SKL</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $dokumens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dokumen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($dokumen->nama); ?></td>
                                                <td>
                                                    <a href="<?php echo e(asset('storage/' . $dokumen->kk)); ?>" download
                                                        class="btn btn-primary" aria-label="Download KK">
                                                        <i class="fas fa-download"></i> KK
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(asset('storage/' . $dokumen->akta_kelahiran)); ?>" download
                                                        class="btn btn-primary" aria-label="Download Akta Kelahiran">
                                                        <i class="fas fa-download"></i> Akta
                                                    </a>
                                                </td>
                                                <td>
                                                    <?php if($dokumen->kip_pkh): ?>
                                                        <a href="<?php echo e(asset('storage/' . $dokumen->kip_pkh)); ?>" download
                                                            class="btn btn-primary" aria-label="Download KIP/PKH">
                                                            <i class="fas fa-download"></i> KIP/PKH
                                                        </a>
                                                    <?php else: ?>
                                                        <span>-</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(asset('storage/' . $dokumen->ktp_ortu)); ?>" download
                                                        class="btn btn-primary" aria-label="Download KTP Orang Tua">
                                                        <i class="fas fa-download"></i> KTP Ortu
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(asset('storage/' . $dokumen->ijazah_skl)); ?>" download
                                                        class="btn btn-primary" aria-label="Download Ijazah/SKL">
                                                        <i class="fas fa-download"></i> Ijazah/SKL
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="action-buttons">
                                                        <form action="<?php echo e(route('admin.dokumen.delete', $dokumen->id)); ?>"
                                                            method="POST" style="display:inline;">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-danger"
                                                                onclick="return confirm('Yakin ingin menghapus dokumen: <?php echo e($dokumen->nama); ?>?')"
                                                                aria-label="Delete Document">
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

                            <!-- Showing Pagination Information -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    Showing <?php echo e($dokumens->firstItem()); ?> to <?php echo e($dokumens->lastItem()); ?> of
                                    <?php echo e($dokumens->total()); ?> entries
                                </div>
                                <div>
                                    <?php echo e($dokumens->links('pagination::bootstrap-4')); ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/dokumen/dokumen-siswa.blade.php ENDPATH**/ ?>