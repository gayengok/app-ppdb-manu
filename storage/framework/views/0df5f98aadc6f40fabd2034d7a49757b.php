

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg">
                        <div
                            class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center py-3">
                            <h4 class="card-title mb-0 font-weight-bold">
                                <i class="fas fa-bullhorn mr-2"></i> PENGUMUMAN HASIL
                            </h4>

                            <!-- Search Box Positioned at Top Right -->
                            <div class="w-20">
                                <form action="" method="GET">
                                    <div class="input-group shadow-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-white border-right-0">
                                                <i class="fas fa-search text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control border-left-0" name="search"
                                            placeholder="Cari berdasarkan nama atau email..."
                                            value="<?php echo e(request('search')); ?>">
                                    </div>
                                </form>
                            </div>
                        </div>



                        
                        <div class="card-body py-4">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped" id="selection-results">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="rounded-left border-0 font-weight-bold">NO</th>
                                            <th class="border-0 font-weight-bold">Nama</th>
                                            <th class="border-0 font-weight-bold">NISN</th>
                                            <th class="border-0 font-weight-bold">Skor</th>
                                            <th class="rounded-right border-0 font-weight-bold text-center">Status</th>
                                            <th class="rounded-right border-0 font-weight-bold text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $attempts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $attempt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="border-bottom">
                                                <td class="py-3"><?php echo e($index + 1); ?></td>
                                                <td class="py-3 font-weight-bold"><?php echo e($attempt->student_name); ?></td>
                                                <td class="py-3"><?php echo e($attempt->student_id ?? '-'); ?></td>
                                                <td class="py-3">
                                                    <div class="d-flex align-items-center">
                                                        
                                                        <div class="progress" style="height: 6px; width: 60px;">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: <?php echo e(($attempt->score / $attempt->total_possible) * 100); ?>%;"
                                                                aria-valuenow="<?php echo e($attempt->score); ?>" aria-valuemin="0"
                                                                aria-valuemax="<?php echo e($attempt->total_possible); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center py-3">
                                                    <?php if($attempt->status == 'Lolos'): ?>
                                                        <div class="badge badge-pill bg-success text-white px-3 py-2">
                                                            <i class="fas fa-check-circle mr-1"></i> LOLOS
                                                        </div>
                                                    <?php elseif($attempt->status == 'Tidak Lolos'): ?>
                                                        <div class="badge badge-pill bg-danger text-white px-3 py-2">
                                                            <i class="fas fa-times-circle mr-1"></i> TIDAK LOLOS
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="badge badge-pill bg-warning text-white px-3 py-2">
                                                            <i class="fas fa-spinner fa-spin mr-1"></i> PROSES
                                                        </div>
                                                    <?php endif; ?>
                                                </td>

                                                <td class="text-center py-3">
                                                    <a href="<?php echo e(route('cetak.pdf', ['id' => $attempt->id])); ?>"
                                                        class="btn btn-primary btn-sm" target="_blank">
                                                        <i class="fas fa-print"></i> Cetak
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                <?php echo e($attempts->links('pagination::bootstrap-4')); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        #selection-results {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }

        #selection-results thead tr {
            background-color: #f8f9fa;
        }

        #selection-results th {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 16px;
            color: #495057;
        }

        #selection-results td {
            vertical-align: middle;
            font-size: 0.9rem;
        }

        .badge {
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .card {
            border: none;
            border-radius: 10px;
        }

        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .input-group {
            border-radius: 8px;
            overflow: hidden;
        }

        .input-group-text {
            border-color: #ced4da;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #ced4da;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        $(document).ready(function() {
            // Make table rows clickable if desired
            $('#selection-results tbody tr').css('cursor', 'pointer');

            // Auto-focus search input when page loads if search was performed
            <?php if(request('search')): ?>
                $('input[name="search"]').focus();
            <?php endif; ?>
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.admin.app.app_siswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/admin/pengumuman/kelulusan.blade.php ENDPATH**/ ?>