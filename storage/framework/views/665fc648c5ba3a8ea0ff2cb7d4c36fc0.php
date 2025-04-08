

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-inner py-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg border-0 rounded-lg">
                        <div class="card-header bg-gradient-primary text-white">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0 font-weight-bold">
                                    <i class="fas fa-chalkboard-teacher"></i> Database Guru
                                </h4>
                                <a href="<?php echo e(route('guru.create')); ?>" class="btn btn-light btn-rounded">
                                    <i class="fas fa-plus-circle mr-1"></i> Tambah Guru
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <!-- Search & Filter Section -->
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-white border-right-0">
                                                <i class="fas fa-search text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="searchInput" class="form-control border-left-0"
                                            placeholder="Cari guru...">
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button class="btn btn-outline-success ml-2">
                                        <i class="fas fa-file-excel mr-1"></i> Export
                                    </button>
                                </div>
                            </div>

                            <!-- Table Section -->
                            <div class="table-responsive">
                                <table class="table table-hover" id="guruTable">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="py-3">No</th>
                                            <th class="py-3">
                                                <span class="d-flex align-items-center">
                                                    Nama <i class="fas fa-sort ml-2 text-muted"></i>
                                                </span>
                                            </th>
                                            <th class="py-3">
                                                <span class="d-flex align-items-center">
                                                    Alamat <i class="fas fa-sort ml-2 text-muted"></i>
                                                </span>
                                            </th>
                                            <th class="py-3">
                                                <span class="d-flex align-items-center">
                                                    Email <i class="fas fa-sort ml-2 text-muted"></i>
                                                </span>
                                            </th>
                                            <th class="py-3">
                                                <span class="d-flex align-items-center">
                                                    Jabatan <i class="fas fa-sort ml-2 text-muted"></i>
                                                </span>
                                            </th>
                                            <th class="text-center py-3">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr class="border-bottom">
                                                <td class="align-middle"><?php echo e($gurus->firstItem() + $index); ?></td>
                                                <td class="align-middle font-weight-bold"><?php echo e($guru->nama); ?></td>
                                                <td class="align-middle"><?php echo e($guru->alamat); ?></td>
                                                <td class="align-middle">
                                                    <a href="mailto:<?php echo e($guru->email); ?>" class="text-primary">
                                                        <?php echo e($guru->email); ?>

                                                    </a>
                                                </td>
                                                <td class="align-middle">
                                                    <span class="badge badge-pill badge-primary px-3 py-2">
                                                        <?php echo e($guru->jabatan); ?>

                                                    </span>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <div class="d-flex justify-content-center">

                                                        <a href="<?php echo e(route('guru.edit', $guru->id)); ?>"
                                                            class="btn btn-sm btn-icon btn-outline-warning mr-2"
                                                            data-toggle="tooltip" title="Edit Data">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="<?php echo e(route('guru.destroy', $guru->id)); ?>" method="POST"
                                                            class="d-inline">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit"
                                                                class="btn btn-sm btn-icon btn-outline-danger"
                                                                data-toggle="tooltip" title="Hapus Data"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data guru ini?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="6" class="text-center py-5">
                                                    <div class="empty-state">
                                                        <img src="<?php echo e(asset('images/empty-data.svg')); ?>" alt="No Data"
                                                            style="max-width: 150px;" class="mb-3">
                                                        <h5 class="text-muted">Data Guru Belum Tersedia</h5>
                                                        <p class="text-muted">Silakan tambahkan data guru baru</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination Section -->
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div class="text-muted">
                                    Menampilkan <?php echo e($gurus->firstItem()); ?> sampai <?php echo e($gurus->lastItem()); ?> dari
                                    <?php echo e($gurus->total()); ?> total data
                                </div>
                                <div>
                                    <?php echo e($gurus->links('pagination::bootstrap-4')); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Alert Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-body p-5 text-center">
                    <div class="text-center mb-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 5rem;"></i>
                    </div>
                    <h4 class="success-message mb-4"></h4>
                    <button type="button" class="btn btn-primary px-5 py-2" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <?php if(session('success')): ?>
        <meta name="success-message" content="<?php echo e(session('success')); ?>">
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize tooltips
            $('[data-toggle="tooltip"]').tooltip();

            // Handle search functionality
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#guruTable tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            // Success modal
            if (document.querySelector('meta[name="success-message"]')) {
                const message = document.querySelector('meta[name="success-message"]').getAttribute('content');
                $('.success-message').text(message);
                $('#successModal').modal('show');
            }

            // Update guru count
            const tbody = document.querySelector("tbody");
            const jumlahGuru = tbody.querySelectorAll("tr:not([colspan])").length;
            const jumlahGuruElement = document.getElementById("jumlah-guru");

            if (jumlahGuruElement) {
                const emptyRow = tbody.querySelector("tr td[colspan]");
                if (emptyRow) {
                    jumlahGuruElement.textContent = "0";
                } else {
                    jumlahGuruElement.textContent = jumlahGuru;
                }
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<style>
    /* Custom Premium Styles */
    .bg-gradient-primary {
        background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
    }

    .btn-rounded {
        border-radius: 30px;
        padding: 0.5rem 1.5rem;
        font-weight: 500;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }

    .btn-rounded:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-icon {
        width: 36px;
        height: 36px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.2s;
    }

    .btn-icon:hover {
        transform: translateY(-2px);
    }

    .card {
        transition: all 0.3s ease;
        border-radius: 0.75rem;
    }

    .table th {
        font-weight: 600;
        border-top: none;
    }

    .badge-pill {
        font-weight: 400;
        letter-spacing: 0.5px;
    }

    /* Pagination styling */
    .pagination {
        border-radius: 30px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .pagination .page-item:first-child .page-link {
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
    }

    .pagination .page-item:last-child .page-link {
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
    }

    .pagination .page-item.active .page-link {
        background-color: #4e73df;
        border-color: #4e73df;
        color: white;
        box-shadow: 0 2px 5px rgba(78, 115, 223, 0.2);
    }

    .pagination .page-link {
        color: #4e73df;
        border: none;
        padding: 0.75rem 1rem;
        font-weight: 500;
    }

    .pagination .page-link:hover {
        background-color: #f8f9fc;
        color: #224abe;
    }

    /* Empty state styling */
    .empty-state {
        padding: 2rem 0;
    }

    /* Search input styling */
    .input-group-text {
        border-radius: 0.5rem 0 0 0.5rem;
    }

    input.form-control {
        border-radius: 0 0.5rem 0.5rem 0;
        padding: 0.75rem 1rem;
    }

    /* Table row hover effect */
    .table-hover tbody tr:hover {
        background-color: rgba(78, 115, 223, 0.05);
        transform: translateY(-1px);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        transition: all 0.2s;
    }
</style>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/guru/guru.blade.php ENDPATH**/ ?>