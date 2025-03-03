

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-video"></i> Data - Video
                            </h4>
                            <!-- Tombol Tambah -->
                            <a href="<?php echo e(route('videos.create')); ?>" class="btn btn-primary btn-sm fs-6">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Video Link</th>
                                            <th>Created Date</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($index + 1); ?></td>
                                                <td><?php echo e($video->title); ?></td>
                                                <td>
                                                    <?php
                                                        $videoId = null;
                                                        if (
                                                            preg_match(
                                                                '/(?:youtube\.com\/(?:[^\/\n\s]*\/\S+\/|(?:v|e(?:mbed)?)\/|watch\?v=)|youtu\.be\/)([^\s\/?&]+)/i',
                                                                $video->video_link,
                                                                $matches,
                                                            )
                                                        ) {
                                                            $videoId = $matches[1] ?? null;
                                                        }
                                                    ?>

                                                    <?php if($videoId): ?>
                                                        <a href="<?php echo e($video->video_link); ?>" target="_blank">
                                                            <img src="https://img.youtube.com/vi/<?php echo e($videoId); ?>/hqdefault.jpg"
                                                                alt="Video Thumbnail" width="100" height="60">
                                                        </a>
                                                    <?php else: ?>
                                                        <span class="text-danger">Link tidak valid</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo e($video->created_at->format('d M Y')); ?></td>
                                                <td class="text-center">
                                                    <div class="d-flex justify-content-center gap-2">
                                                        <a href="<?php echo e(route('videos.edit', $video->id)); ?>"
                                                            class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="<?php echo e(route('videos.destroy', $video->id)); ?>"
                                                            method="POST" style="display:inline;">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="btn btn-danger btn-sm">
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
                            <div class="mt-3">
                                <?php echo e($videos->links()); ?>

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

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/gallery/video/video.blade.php ENDPATH**/ ?>