

<?php $__env->startSection('content'); ?>
    <section class="news-article-section py-8 bg-light">
        <div class="container my-5">
            <h2 class="text-center mb-5 custom-title"
                style="font-family: 'Roboto', sans-serif; font-weight: 700; margin-top: 70px; color: #3A6B56;">
                Galeri Video
            </h2>

            <div class="row">
                <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        // Ekstrak video ID dari link YouTube
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
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/<?php echo e($videoId); ?>" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($video->title); ?></h5>
                                    <p class="text-danger">Video Link Tidak Valid</p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>


            <!-- Video 2 -->
            

        </div>
    </section>
<?php $__env->stopSection(); ?>

<style>
    .custom-title {
        font-size: 2rem;
        position: relative;
    }

    .custom-title::after {
        content: "";
        display: block;
        width: 10%;
        height: 2px;
        background: #fbbc05;
        margin: 0.5rem auto 0;
    }

    @media (max-width: 768px) {
        .custom-title::after {
            width: 50%;
        }
    }


    .py-8 {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important;
    }
</style>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/galery/galery-video.blade.php ENDPATH**/ ?>