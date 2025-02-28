

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Editorial - Published
                            </h4>
                        </div>

                        <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                <?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <div class="container mt-3">
                            <div class="row">

                                <div class="col-md-4 d-flex align-items-center">
                                    <a href="<?php echo e(route('post.berita')); ?>" class="btn btn-primary" style="margin-left: 10px;">
                                        <i class="fas fa-plus"></i> New Article
                                    </a>
                                </div>

                                <div class="col-md-8">
                                    <form action="<?php echo e(route('news.berita')); ?>" method="GET" class="d-flex ms-auto me-3"
                                        style="width: 330px;">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-search"></i>
                                            </span>
                                            <input type="text" name="search" class="form-control"
                                                placeholder="Search articles..." value="<?php echo e(request('search')); ?>">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Title</th>
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Author</th>
                                            <th style="text-align: center;">Published Date</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?php echo e($index + 1 + ($artikels->currentPage() - 1) * 10); ?></td>
                                                <td><?php echo e(Str::limit($artikel->title, 70)); ?></td>
                                                <td class="text-center"><?php echo e($artikel->status); ?></td>
                                                <td class="text-center"><?php echo e($artikel->author); ?></td>
                                                <td class="text-center"><?php echo e($artikel->published_date->format('Y/m/d')); ?></td>

                                                <td class="text-center">
                                                    <!-- Edit and Delete buttons -->
                                                    <div class="d-flex justify-content-center flex-wrap">
                                                        <a href="<?php echo e(route('articles.edit', $artikel->id)); ?>"
                                                            class="btn btn-info btn-icon m-1" title="Edit Artikel">
                                                            <i class="fas fa-edit" style="font-size: 1.5rem;"></i>
                                                        </a>

                                                        <form action="<?php echo e(route('artikels.destroy', $artikel->id)); ?>"
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

                            <!-- Pagination showing message -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-muted">
                                        Showing <?php echo e($artikels->firstItem()); ?> to <?php echo e($artikels->lastItem()); ?> of
                                        <?php echo e($artikels->total()); ?> entries
                                    </span>
                                </div>

                                <div>
                                    <?php echo e($artikels->links('pagination::bootstrap-4')); ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<style>
    th {
        background-color: #120101 !important;
        color: white !important;
    }

    @media (max-width: 767px) {
        .btn-primary {
            width: 100%;
            margin-left: 10px;
            margin-right: 10px;
        }

    }

    @media (max-width: 767px) {
        .col-md-8 {
            position: relative;
            top: 10px;
        }

        .input-group {
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .btn-icon i {
            font-size: 1.2rem;
            /* Ukuran ikon lebih kecil */
        }

        .btn {
            padding: 0.5rem;
            /* Sesuaikan padding tombol */
        }
    }
</style>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/news/published.blade.php ENDPATH**/ ?>