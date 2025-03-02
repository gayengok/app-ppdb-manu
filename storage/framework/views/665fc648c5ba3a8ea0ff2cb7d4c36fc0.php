

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Data - Guru
                            </h4>
                            <a href="<?php echo e(route('guru.create')); ?>" class="btn btn-primary">
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
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($gurus->firstItem() + $index); ?></td>
                                                <td><?php echo e($guru->nama); ?></td>
                                                <td><?php echo e($guru->alamat); ?></td>
                                                <td><?php echo e($guru->email); ?></td>
                                                <td><?php echo e($guru->jabatan); ?></td>



                                                <td class="text-center">
                                                    <!-- Edit and Delete buttons -->
                                                    <div class="d-flex justify-content-center flex-wrap">
                                                        <a href="<?php echo e(route('guru.edit', $guru->id)); ?>"
                                                            class="btn btn-info btn-icon m-1" title="Edit Guru">
                                                            <i class="fas fa-edit" style="font-size: 1.5rem;"></i>
                                                        </a>

                                                        <form action="<?php echo e(route('guru.destroy', $guru->id)); ?>" method="POST"
                                                            style="display:inline;">
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
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="6" class="text-center">Data Guru Tidak Ditemukan</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Showing 1 to 10 of X entries -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    Showing <?php echo e($gurus->firstItem()); ?> to <?php echo e($gurus->lastItem()); ?> of
                                    <?php echo e($gurus->total()); ?>

                                    entries
                                </div>
                                <div>
                                    <nav>
                                        <?php echo e($gurus->links('pagination::bootstrap-4')); ?>

                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('popup/js/popup.js')); ?>"></script>
    <?php if(session('success')): ?>
        <meta name="success-message" content="<?php echo e(session('success')); ?>">
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tbody = document.querySelector("tbody");
            const jumlahGuru = tbody.querySelectorAll("tr").length;

            const jumlahGuruElement = document.getElementById("jumlah-guru");
            if (jumlahGuruElement) {
                const emptyRow = tbody.querySelector("tr td[colspan]");
                if (emptyRow) {
                    jumlahGuruElement.textContent = "0"; // Tidak ada data
                } else {
                    jumlahGuruElement.textContent = jumlahGuru; // Tampilkan jumlah
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>


<style>
    .pagination-container {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .pagination-container .entries-info {
        font-size: 14px;
        color: #6c757d;

    }

    .pagination-container nav {
        margin: 0;

    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .pagination .page-link {
        color: #007bff;
    }

    .pagination .page-link:hover {
        color: #0056b3;
    }
</style>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/guru/guru.blade.php ENDPATH**/ ?>