

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-user-graduate"></i> Pengumuman
                            </h4>
                        </div>




                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>NISN</th>
                                            <th>Skor</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $attempts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $attempt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($index + 1); ?></td>
                                                <td><?php echo e($attempt->student_name); ?></td>
                                                <td><?php echo e($attempt->student_id ?? '-'); ?></td>
                                                <td><?php echo e($attempt->score); ?> / <?php echo e($attempt->total_possible); ?></td>

                                                <td class="text-center">
                                                    <span
                                                        class="badge 
                                                        <?php if($attempt->status == 'Lolos'): ?> bg-success 
                                                        <?php elseif($attempt->status == 'Tidak Lolos'): ?> bg-danger 
                                                        <?php else: ?> bg-warning text-white <?php endif; ?>"
                                                        style="padding: 10px 15px; font-size: 12px; font-weight: bold;">
                                                        <i
                                                            class="fas 
                                                            <?php if($attempt->status == 'Lolos'): ?> fa-check-circle 
                                                            <?php elseif($attempt->status == 'Tidak Lolos'): ?> fa-times-circle 
                                                            <?php else: ?> fa-spinner <?php endif; ?>"></i>
                                                        <?php echo e($attempt->status ?? 'Proses'); ?>

                                                    </span>
                                                </td>

                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center flex-wrap gap-2">
                                                        <form action="<?php echo e(route('pengumuman.update', $attempt->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <input type="hidden" name="status" value="Lolos">
                                                            <button type="submit" class="btn btn-success btn-sm">
                                                                <i class="fas fa-check-circle"></i> Lolos
                                                            </button>
                                                        </form>

                                                        <form action="<?php echo e(route('pengumuman.update', $attempt->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <input type="hidden" name="status" value="Tidak Lolos">
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fas fa-times-circle"></i> Tidak Lolos
                                                            </button>
                                                        </form>

                                                        <form action="<?php echo e(route('pengumuman.update', $attempt->id)); ?>"
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

                            <div class="d-flex justify-content-center mt-4">
                                <?php echo e($attempts->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/pengumuman/hasil_test/hasil_test.blade.php ENDPATH**/ ?>