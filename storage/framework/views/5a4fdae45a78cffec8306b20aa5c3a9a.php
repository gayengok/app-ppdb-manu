

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-upload"></i> Upload New Photo
                            </h4>
                        </div>

                        <div class="card-body">
                            
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Oops!</strong> Please fix the following errors:
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            
                            <form action="<?php echo e(route('photo.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Photo Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="<?php echo e(old('title')); ?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="photo" class="form-label">Upload Photo</label>
                                    <input type="file" name="photo" id="photo" class="form-control"
                                        accept="image/*" required>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <a href="<?php echo e(route('photo.index')); ?>" class="btn btn-secondary me-2">
                                        <i class="fas fa-arrow-left"></i> Back
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/gallery/photo/create.blade.php ENDPATH**/ ?>