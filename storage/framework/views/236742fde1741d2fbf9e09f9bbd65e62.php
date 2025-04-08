

<?php $__env->startSection('content'); ?>
    <div class="container-fluid px-4">
        <div class="page-header my-4">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title text-primary fw-bold">
                        <i class="fas fa-newspaper me-2"></i>Editorial Manager
                    </h2>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
            <div class="card-header bg-white py-3">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h5 class="mb-0 text-dark fw-bold">Published Articles</h5>
                    </div>
                    <div class="col-lg-6">
                        <!-- Fixed search form -->
                        <form action="<?php echo e(route('news.berita')); ?>" method="GET">
                            <div class="input-group shadow-sm">
                                <span class="input-group-text bg-light border-0">
                                    <i class="fas fa-search text-primary"></i>
                                </span>
                                <input type="text" name="search" class="form-control border-0 bg-light"
                                    placeholder="Search articles..." value="<?php echo e(request('search')); ?>">
                                <button type="submit" class="btn btn-primary px-3">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-gradient-primary text-white">
                            <tr>
                                <th class="py-3 ps-4">No</th>
                                <th class="py-3">Article Title</th>
                                <th class="py-3 text-center">Status</th>
                                <th class="py-3 text-center">Author</th>
                                <th class="py-3 text-center">Published Date</th>
                                <th class="py-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="border-bottom">
                                    <td class="ps-4"><?php echo e($index + 1 + ($artikels->currentPage() - 1) * 10); ?></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="article-icon bg-light rounded p-2 me-3">
                                                <i class="fas fa-file-alt text-primary fs-4"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1"><?php echo e(Str::limit($artikel->title, 70)); ?></h6>
                                                <span class="text-muted small">ID: #<?php echo e($artikel->id); ?></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-success rounded-pill px-3 py-2"><?php echo e($artikel->status); ?></span>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="avatar avatar-sm me-2 bg-primary rounded-circle">
                                                <span
                                                    class="avatar-text text-white"><?php echo e(substr($artikel->author, 0, 1)); ?></span>
                                            </div>
                                            <span><?php echo e($artikel->author); ?></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex flex-column align-items-center">
                                            <span class="fw-bold"><?php echo e($artikel->published_date->format('d M Y')); ?></span>
                                            <small
                                                class="text-muted"><?php echo e($artikel->published_date->diffForHumans()); ?></small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="<?php echo e(route('articles.edit', $artikel->id)); ?>"
                                                class="btn btn-light btn-sm rounded-circle shadow-sm" title="Edit Article">
                                                <i class="fas fa-edit text-info"></i>
                                            </a>
                                            <a href="#" class="btn btn-light btn-sm rounded-circle shadow-sm"
                                                title="View Article">
                                                <i class="fas fa-eye text-primary"></i>
                                            </a>
                                            <form action="<?php echo e(route('artikels.destroy', $artikel->id)); ?>" method="POST"
                                                class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-light btn-sm rounded-circle shadow-sm"
                                                    title="Delete Article"
                                                    onclick="return confirm('Are you sure you want to delete this article?')">
                                                    <i class="fas fa-trash-alt text-danger"></i>
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

            <div class="card-footer bg-white border-0 py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <span class="badge bg-light text-dark">
                            Showing <?php echo e($artikels->firstItem()); ?> to <?php echo e($artikels->lastItem()); ?> of
                            <?php echo e($artikels->total()); ?> entries
                        </span>
                    </div>
                    <div class="col-auto">
                        <nav>
                            <?php echo e($artikels->links('pagination::bootstrap-5')); ?>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if(session('success')): ?>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast show bg-white shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-white">
                    <i class="fas fa-check-circle me-2"></i>
                    <strong class="me-auto">Success</strong>
                    <small>Just now</small>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
                <div class="toast-body py-3">
                    <?php echo e(session('success')); ?>

                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        /* Premium Styles for Dashboard */
        body {
            background-color: #f8f9fc;
        }

        .page-title {
            font-size: 1.75rem;
            letter-spacing: -0.5px;
        }

        .card {
            transition: all 0.2s ease;
        }

        .bg-gradient-primary {
            background: linear-gradient(45deg, #4e73df, #224abe);
        }

        .table> :not(caption)>*>* {
            padding: 1rem 0.75rem;
        }

        .avatar {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .avatar-text {
            font-weight: bold;
            font-size: 14px;
        }

        .badge {
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2653d4;
        }

        .text-primary {
            color: #4e73df !important;
        }

        .article-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Responsive Fixes */
        @media (max-width: 992px) {
            .card-header {
                flex-direction: column;
                gap: 1rem;
            }

            .input-group {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .page-header .row {
                flex-direction: column;
                text-align: center;
            }

            .page-header .col-auto {
                margin: 1rem auto 0;
            }

            .table-responsive {
                font-size: 0.875rem;
            }

            .input-group {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .btn-sm {
                padding: 0.25rem 0.5rem;
            }

            .d-flex.gap-2 {
                gap: 0.5rem !important;
            }
        }

        /* Animation for Cards */
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.15) !important;
        }

        /* Toast Animation */
        .toast {
            animation: slideInRight 0.3s ease-out;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        // Auto-hide toast after 5 seconds
        setTimeout(function() {
            const toast = document.querySelector('.toast');
            if (toast) {
                const bsToast = new bootstrap.Toast(toast);
                bsToast.hide();
            }
        }, 5000);

        // Row hover effect
        document.querySelectorAll('tbody tr').forEach(row => {
            row.addEventListener('mouseover', () => {
                row.classList.add('bg-light');
            });

            row.addEventListener('mouseout', () => {
                row.classList.remove('bg-light');
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/news/published.blade.php ENDPATH**/ ?>