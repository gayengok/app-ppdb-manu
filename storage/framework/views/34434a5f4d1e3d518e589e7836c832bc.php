

<?php $__env->startSection('content'); ?>
    <section class="video-gallery-section" style="margin-top: 70px; font-family: 'Poppins', sans-serif;">
        <div class="container">
            <div class="section-header text-center mb-10" style="margin-bottom: 3rem;">
                <span class="section-badge"
                    style="
                display: inline-block;
                font-size: 0.85rem;
                letter-spacing: 4px;
                color: #28a745;
                text-transform: uppercase;
                margin-bottom: 1rem;
                font-weight: 600;
                position: relative;
            ">
                    <span
                        style="
                    position: absolute;
                    bottom: -5px;
                    left: 0;
                    width: 100%;
                    height: 2px;
                    background: #28a745;
                    transform: scaleX(0);
                    transition: transform 0.3s ease;
                "></span>
                    KOLEKSI EKSKLUSIF
                </span>
                <h2 class="section-title"
                    style="
                font-size: 1.8rem;
                font-weight: 700;
                color: #2f3542;
                margin-bottom: 1.5rem;
                line-height: 1.2;
            ">
                    Galeri <span style="color: #28a745;">Video</span>
                </h2>
                <div style="width: 80px; height: 4px; background: #2f3542; margin: 0 auto;"></div>
            </div>
            <div class="row g-4">
                <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        // Extract YouTube video ID
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

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="video-card">
                            <?php if($videoId): ?>
                                <div class="video-container">
                                    <iframe src="https://www.youtube.com/embed/<?php echo e($videoId); ?>" allowfullscreen
                                        class="video-frame"></iframe>
                                    <div class="play-overlay">
                                        <div class="play-icon">
                                            <i class="bi bi-play-circle-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="video-info">
                                    <h5 class="video-title"><?php echo e($video->title); ?></h5>
                                    <?php if(isset($video->description)): ?>
                                        <p class="video-description"><?php echo e(Str::limit($video->description, 100)); ?></p>
                                    <?php endif; ?>
                                    <div class="video-meta">
                                        <div class="meta-left">
                                            <?php if(isset($video->created_at)): ?>
                                                <span class="meta-date"><i class="bi bi-calendar3"></i>
                                                    <?php echo e($video->created_at->format('d M Y')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="meta-right">
                                            <?php if(isset($video->category)): ?>
                                                <span class="video-category">
                                                    <i class="bi bi-tag-fill"></i> <?php echo e($video->category); ?>

                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="error-card">
                                    <div class="card-body text-center">
                                        <div class="error-icon">
                                            <i class="bi bi-exclamation-diamond-fill"></i>
                                        </div>
                                        <h5><?php echo e($video->title); ?></h5>
                                        <p class="text-danger">Video Link Tidak Valid</p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');





        .video-gallery-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #edf2f7 100%);
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }

        .video-gallery-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%233A6B56' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.2;
        }

        .section-header {
            margin-bottom: 3rem;
            position: relative;
        }

        .section-badge {
            display: inline-block;
            background: linear-gradient(45deg, #3A6B56, #5D9C81);
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            letter-spacing: 1.5px;
            margin-bottom: 1.5rem;
            box-shadow: 0 5px 15px rgba(58, 107, 86, 0.3);
        }

        .premium-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 2.5rem;
            color: #1a1a1a;
            position: relative;
            margin-bottom: 1.5rem;
            letter-spacing: -0.5px;
        }

        .premium-title::after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #3A6B56, #5D9C81);
            border-radius: 4px;
        }

        .video-card {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            background: white;
            height: 100%;
            position: relative;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .video-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            background: #000;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .video-info {
            padding: 1.5rem;
        }

        .video-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.25rem;
            color: #1a1a1a;
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }

        .video-description {
            font-family: 'Poppins', sans-serif;
            color: #555;
            font-size: 0.95rem;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .video-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
            color: #777;
            font-family: 'Poppins', sans-serif;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .video-meta i {
            margin-right: 5px;
            font-size: 0.9em;
        }

        .meta-date,
        .video-category {
            display: inline-flex;
            align-items: center;
        }

        .video-category {
            background-color: rgba(58, 107, 86, 0.1);
            color: #3A6B56;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-weight: 500;
        }

        /* Custom YouTube Player Style */
        .video-container {
            position: relative;
        }

        .video-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(transparent 60%, rgba(0, 0, 0, 0.3));
            z-index: 1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .video-card:hover .video-container::before {
            opacity: 1;
        }

        /* Error State */
        .error-card {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem 1.5rem;
            background: linear-gradient(to bottom right, #fff, #f8f8f8);
            height: 100%;
            border-radius: 16px;
            text-align: center;
        }

        .error-icon {
            font-size: 2.5rem;
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .premium-title {
                font-size: 2.2rem;
            }

            .section-badge {
                font-size: 0.75rem;
                padding: 0.4rem 1.2rem;
            }
        }

        @media (max-width: 767px) {
            .video-gallery-section {
                padding: 4rem 0;
            }

            .premium-title {
                font-size: 1.8rem;
            }

            .premium-title::after {
                width: 60px;
                height: 3px;
            }

            .video-card {
                max-width: 400px;
                margin-left: auto;
                margin-right: auto;
            }

            .video-info {
                padding: 1.25rem;
            }

            .video-title {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 575px) {
            .video-card {
                max-width: 100%;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/galery/galery-video.blade.php ENDPATH**/ ?>