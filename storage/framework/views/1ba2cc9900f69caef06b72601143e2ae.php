
<?php $__env->startSection('content'); ?>
    <section class="sejarah-modern">
        <div class="geometric-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>

        <div class="container position-relative">
            <?php $__empty_1 = true; $__currentLoopData = $sejarahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $sejarah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="sejarah-header">
                            <div class="title-badge">
                                <span class="badge-line"></span>
                                <h1 class="title">
                                    <span class="text-orange">SEJARAH</span>
                                    <span class="text-green">MA NU LUTHFUL ULUM</span>
                                </h1>
                                <span class="badge-line"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="image-card">
                            <div class="image-container">
                                <img src="<?php echo e(asset('storage/sejarah_images/' . $sejarah->img)); ?>"
                                    alt="Gedung MA NU Luthful Ulum">
                            </div>
                            <div class="image-card-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <h3>Gedung MA NU Luthful Ulum</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="content-card">
                            <div class="card-decoration">
                                <div class="decoration-circle"></div>
                            </div>
                            <div class="content-text">
                                <div class="timeline-indicator">
                                    <div class="timeline-dot"></div>
                                    <div class="timeline-line"></div>
                                </div>
                                <div class="text-content">
                                    <?php echo nl2br(e($sejarah->deskripsi)); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-10 mx-auto">
                        <div class="highlight-card">
                            <div class="highlight-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <p>MA NU Luthful Ulum - Mencetak Generasi Berakhlak Mulia dan Berwawasan Luas</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="row">
                    <div class="col-12">
                        <div class="empty-state">
                            <div class="empty-icon">
                                <i class="fas fa-folder-open"></i>
                            </div>
                            <p>Tidak ada data sejarah yang tersedia.</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Load Font Awesome untuk icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Base styling */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        .sejarah-modern {
            position: relative;
            padding: 7rem 0;
            background: linear-gradient(120deg, #f3f4f6 0%, #e2e3e5 100%);
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
        }

        /* Geometric background shapes */
        .geometric-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .shape {
            position: absolute;
            opacity: 0.05;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }

        .shape-1 {
            width: 400px;
            height: 400px;
            background: #FF9F00;
            top: -100px;
            left: -200px;
            animation: float 15s ease-in-out infinite;
        }

        .shape-2 {
            width: 300px;
            height: 300px;
            background: #3A6B56;
            bottom: -150px;
            right: -50px;
            animation: float 18s ease-in-out infinite reverse;
        }

        .shape-3 {
            width: 200px;
            height: 200px;
            background: #FF9F00;
            top: 50%;
            right: 10%;
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }

            25% {
                transform: translate(10px, 15px) rotate(5deg);
            }

            50% {
                transform: translate(5px, 5px) rotate(-5deg);
            }

            75% {
                transform: translate(-10px, 10px) rotate(3deg);
            }

            100% {
                transform: translate(0, 0) rotate(0deg);
            }
        }

        /* Title styling */
        .sejarah-header {
            text-align: center;
            position: relative;
            z-index: 2;
            margin-bottom: 20px;
        }

        .title-badge {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .badge-line {
            height: 2px;
            width: 60px;
            background: linear-gradient(90deg, #3A6B56, #FF9F00);
        }

        .title {
            margin: 0 15px;
            font-weight: 800;
            letter-spacing: 1px;
            font-size: 2.5rem;
            position: relative;
        }

        .text-orange {
            color: #FF9F00;
            margin-right: 12px;
            position: relative;
        }

        .text-green {
            color: #3A6B56;
            position: relative;
        }

        .text-orange::after {
            content: "";
            position: absolute;
            width: 8px;
            height: 8px;
            background: #FF9F00;
            border-radius: 50%;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Image card styling */
        .image-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15);
            height: 100%;
            min-height: 400px;
            z-index: 2;
            transition: all 0.4s ease;
        }

        .image-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
        }

        .image-container {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .image-card:hover .image-container img {
            transform: scale(1.1);
        }

        .image-card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 100%);
            padding: 20px;
            color: white;
            transition: all 0.3s ease;
        }

        .overlay-content {
            display: flex;
            align-items: center;
        }

        .overlay-icon {
            background: #FF9F00;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .overlay-icon i {
            font-size: 18px;
        }

        .image-card-overlay h3 {
            margin: 0;
            font-size: 18px;
            font-weight: 600;
        }

        /* Content card styling */
        .content-card {
            position: relative;
            z-index: 2;
            height: 100%;
            padding: 30px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .content-card:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .card-decoration {
            position: absolute;
            top: 0;
            right: 0;
            overflow: hidden;
            width: 100px;
            height: 100px;
        }

        .decoration-circle {
            position: absolute;
            top: -50px;
            right: -50px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(255, 159, 0, 0.2) 0%, rgba(58, 107, 86, 0.2) 100%);
        }

        .content-text {
            position: relative;
            display: flex;
        }

        .timeline-indicator {
            padding-right: 20px;
            padding-top: 5px;
        }

        .timeline-dot {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #3A6B56;
            margin-bottom: 10px;
        }

        .timeline-line {
            width: 2px;
            height: calc(100% - 16px);
            background: #e0e0e0;
            margin-left: 7px;
        }

        .text-content {
            flex-grow: 1;
            font-size: 15px;
            line-height: 1.8;
            color: #333;
            text-align: justify;
        }

        /* Highlight card styling */
        .highlight-card {
            position: relative;
            background: linear-gradient(135deg, #3A6B56 0%, #2a4e3f 100%);
            color: white;
            padding: 25px 40px;
            border-radius: 12px;
            margin-top: 40px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            box-shadow: 0 10px 25px rgba(58, 107, 86, 0.4);
        }

        .highlight-icon {
            background: rgba(255, 255, 255, 0.2);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }

        .highlight-icon i {
            font-size: 24px;
        }

        .highlight-card p {
            margin: 0;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        /* Empty state styling */
        .empty-state {
            text-align: center;
            padding: 80px 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            z-index: 2;
            position: relative;
        }

        .empty-icon {
            font-size: 60px;
            color: #e0e0e0;
            margin-bottom: 20px;
        }

        .empty-state p {
            color: #666;
            margin-bottom: 25px;
            font-size: 18px;
        }

        .btn-custom {
            background: linear-gradient(135deg, #FF9F00 0%, #e68f00 100%);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 5px 15px rgba(255, 159, 0, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 159, 0, 0.4);
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .title {
                font-size: 2rem;
            }

            .image-card {
                min-height: 350px;
            }
        }

        @media (max-width: 768px) {


            .title {
                font-size: 1.8rem;
            }

            .badge-line {
                width: 40px;
            }

            .image-card {
                min-height: 300px;
            }

            .highlight-card {
                flex-direction: column;
                padding: 20px;
            }

            .highlight-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .highlight-card p {
                font-size: 16px;
            }
        }

        @media (max-width: 576px) {
            .title {
                font-size: 1.5rem;
            }

            .text-orange {
                display: block;
                margin-right: 0;
                margin-bottom: 5px;
            }

            .text-orange::after {
                display: none;
            }

            .content-card {
                padding: 20px;
            }

            .text-content {
                font-size: 14px;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/profil/sejarah.blade.php ENDPATH**/ ?>