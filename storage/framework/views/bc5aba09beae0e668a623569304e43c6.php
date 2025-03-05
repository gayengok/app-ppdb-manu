

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-camera"></i> Data - Photo
                            </h4>

                            <a href="<?php echo e(route('photo.create')); ?>" class="btn btn-primary mb-3">
                                <i class="fas fa-upload"></i>New Photo
                            </a>
                        </div>

                        
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Oops!</strong> There were some problems with your input:
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        
                        <div class="card-body">


                            
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Photo</th>
                                            <th style="text-align: center;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($photo->title); ?></td>
                                                <td>
                                                    <img src="<?php echo e(asset('storage/' . $photo->photo_path)); ?>" width="100"
                                                        alt="<?php echo e($photo->title); ?>">
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                                                        <!-- Tombol Edit -->
                                                        <a href="<?php echo e(route('photo.edit', $photo->id)); ?>"
                                                            class="btn btn-warning d-flex align-items-center">
                                                            <i class="fas fa-edit"></i>
                                                        </a>

                                                        <!-- Form Hapus -->
                                                        <form action="<?php echo e(route('photo.destroy', $photo->id)); ?>"
                                                            method="POST" class="d-inline">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit"
                                                                class="btn btn-danger d-flex align-items-center"
                                                                onclick="return confirm('Are you sure you want to delete this photo?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="4" class="text-center">No photos available.</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <script src="<?php echo e(asset('popup/js/popup.js')); ?>"></script>
                        <?php if(session('success')): ?>
                            <meta name="success-message" content="<?php echo e(session('success')); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/gallery/photo/photo.blade.php ENDPATH**/ ?>