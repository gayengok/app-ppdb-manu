

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-user-graduate"></i> Data - Hasil Skor Calon Siswa
                            </h4>
                        </div>

                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Nomor Induk</th>
                                            <th>Skor</th>
                                            <th>Persentase</th>
                                            <th>Status</th>
                                            <th>Notes</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $attempts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attempt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($attempt->student_name); ?></td>
                                                <td><?php echo e($attempt->student_id ?? '-'); ?></td>
                                                <td><?php echo e($attempt->score); ?> / <?php echo e($attempt->total_possible); ?></td>
                                                <td><?php echo e(number_format($attempt->percentage, 1)); ?>%</td>
                                                <td>
                                                    <?php if($attempt->passed): ?>
                                                        <span class="badge bg-success">LULUS</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-danger">TIDAK LULUS</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($attempt->notes): ?>
                                                        <span
                                                            class="badge bg-warning text-dark"><?php echo e($attempt->notes); ?></span>
                                                    <?php else: ?>
                                                        -
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($attempt->created_at->format('d/m/Y H:i')); ?></td>

                                                <td class="text-start">
                                                    <div class="d-flex gap-2">
                                                        <a href="<?php echo e(route('quiz.result', $attempt->id)); ?>"
                                                            class="btn btn-sm btn-info">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <form action="<?php echo e(route('quiz.delete', $attempt->id)); ?>"
                                                            method="POST"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-sm btn-danger">
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

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/sekor/scores.blade.php ENDPATH**/ ?>