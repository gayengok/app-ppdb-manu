

<?php $__env->startSection('content'); ?>
    <div class="hero-section">
        <div class="container-fluid px-0" style="overflow: hidden;">
            <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="overlay-gradient"></div>
                        <img src="<?php echo e(asset('frontend/assets/img/Hero.jpg')); ?>" class="d-block w-100" alt="Kegiatan 1">
                        <div class="carousel-caption">
                            <h2 class="fw-bold text-white">MA NU LUTHFUL ULUM</h2>
                            <p class="lead">Membentuk generasi berilmu, berakhlak dan berprestasi</p>
                            <button class="btn btn-primary rounded-pill px-4 mt-2">Gabung Sekarang</button>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="overlay-gradient"></div>
                        <img src="<?php echo e(asset('frontend/assets/img/MA-NU/kegiatan-1.jpg')); ?>" class="d-block w-100"
                            alt="Kegiatan 2">
                        <div class="carousel-caption">
                            <h2 class="fw-bold text-white">PENDIDIKAN BERKUALITAS</h2>
                            <p class="lead">Mengembangkan potensi siswa secara optimal</p>
                            <button class="btn btn-primary rounded-pill px-4 mt-2">Gabung Sekarang</button>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="overlay-gradient"></div>
                        <img src="<?php echo e(asset('frontend/assets/img/MA-NU/kegiatan-3.jpg')); ?>" class="d-block w-100"
                            alt="Kegiatan 3">
                        <div class="carousel-caption">
                            <h2 class="fw-bold text-white">PRETASI & INOVASI</h2>
                            <p class="lead">Pembelajaran modern berbasis nilai agama</p>
                            <button class="btn btn-primary rounded-pill px-4 mt-2">Gabung Sekarang</button>
                        </div>
                    </div>
                </div>

                <!-- Premium styled carousel controls -->
                <button class="carousel-control-prev premium-control" type="button" data-bs-target="#newsCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-icon" aria-hidden="true">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next premium-control" type="button" data-bs-target="#newsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-icon" aria-hidden="true">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>

                <!-- Carousel indicators -->
                <div class="carousel-indicators custom-indicators">
                    <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#newsCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </div>

    <div class="news-section py-4">
        <div class="container">
            <div class="section-header text-center mb-4">
                <h6 class="text-primary fw-bold text-uppercase tracking-wide">Informasi Terkini</h6>
                <h2 class="fw-bold mb-3">Berita Terbaru</h2>
                <div class="title-separator">
                    <span class="separator-line"></span>
                    <span class="separator-icon"><i class="fas fa-book-open"></i></span>
                    <span class="separator-line"></span>
                </div>
            </div>

            <!-- News cards with premium styling -->
            <div class="row g-3 move-up">
                <?php $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="card news-card h-100 border-0 shadow-sm hover-effect">
                            <div class="card-img-wrapper">
                                <img src="<?php echo e(asset('storage/' . $artikel->image)); ?>" class="card-img-top"
                                    alt="<?php echo e($artikel->title); ?>">
                                <div class="card-date-badge">
                                    <?php echo e(\Carbon\Carbon::parse($artikel->published_date)->format('d')); ?>

                                    <span
                                        class="d-block small"><?php echo e(\Carbon\Carbon::parse($artikel->published_date)->format('M')); ?></span>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="card-category mb-2">
                                    <span class="badge bg-light text-primary">Berita</span>
                                </div>
                                <h3 class="card-title fw-bold">
                                    <a href="<?php echo e(route('article.show', $artikel->id)); ?>"
                                        class="stretched-link text-decoration-none text-dark"><?php echo e($artikel->title); ?></a>
                                </h3>
                                <p class="card-text text-muted"><?php echo e($artikel->short_description); ?></p>
                            </div>
                            <div
                                class="card-footer bg-white border-0 d-flex justify-content-between align-items-center p-3 pt-0">
                                <div class="text-muted small">
                                    <i class="far fa-clock me-1"></i>
                                    <?php echo e(\Carbon\Carbon::parse($artikel->published_date)->format('d M Y')); ?>

                                </div>
                                <div class="read-more">
                                    <span class="small fw-bold text-primary">Baca <i
                                            class="fas fa-arrow-right ms-1"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Premium pagination -->
            <div class="row mt-4">
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination premium-pagination justify-content-center">
                            <?php echo e($artikels->links('pagination::bootstrap-5')); ?>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Premium styling with mobile optimization -->
    <style>
        .move-up {
            transform: translateY(-70px);
            transition: transform 0.3s ease-in-out;
        }

        @media (max-width: 768px) {
            .move-up {
                transform: translateY(-50px);
            }
        }

        @media (max-width: 480px) {
            .move-up {
                transform: translateY(-40px);
            }
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transition: var(--transition);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        /* Hero Carousel Premium Styling */
        .hero-section {
            margin-top: 0;
            position: relative;
        }

        .carousel-item {
            height: 80vh;
            min-height: 350px;
            position: relative;
        }

        .carousel-item img {
            height: 120%;
            object-fit: cover;
            object-position: center;
        }

        .overlay-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.7) 100%);
            z-index: 1;
        }

        .carousel-caption {
            bottom: 20%;
            z-index: 2;
            max-width: 700px;
            margin: 0 auto;
            padding: 1.5rem;
            text-align: center;
        }

        .carousel-caption h2 {
            font-weight: 700;
            letter-spacing: -0.5px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s both;
        }

        .carousel-caption p {
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            margin-bottom: 1rem;
            animation: fadeInUp 1s 0.3s both;
        }

        .carousel-caption .btn {
            animation: fadeInUp 1s 0.6s both;
        }

        .premium-control {
            width: 40px;
            height: 40px;
            opacity: 0.8;
            transition: var(--transition);
        }

        .carousel-control-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: var(--white);
            border-radius: 50%;
            color: var(--primary-color);
            box-shadow: var(--box-shadow);
        }

        .custom-indicators {
            bottom: 20px;
        }

        .custom-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            border: 2px solid var(--white);
            margin: 0 5px;
        }

        .custom-indicators button.active {
            background-color: var(--secondary-color);
            transform: scale(1.2);
        }

        /* Section Header Premium Styling */

        .tracking-wide {
            letter-spacing: 2px;
        }

        .title-separator {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0;
        }

        .separator-line {
            height: 2px;
            width: 50px;
            background-color: var(--secondary-color);
        }

        .separator-icon {
            margin: 0 10px;
            color: var(--primary-color);
            font-size: 1rem;
        }

        /* News Cards Premium Styling */
        .news-card {
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: var(--transition);
        }

        .news-card:hover {
            transform: translateY(-5px);
        }

        .hover-effect {
            transition: var(--transition);
        }

        .hover-effect:hover {
            box-shadow: var(--box-shadow);
        }

        .card-img-wrapper {
            position: relative;
            overflow: hidden;
            height: 180px;
        }

        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .news-card:hover .card-img-wrapper img {
            transform: scale(1.05);
        }

        .card-date-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: var(--primary-color);
            color: var(--white);
            font-weight: 600;
            padding: 7px 12px;
            border-radius: var(--border-radius);
            font-size: 1rem;
            line-height: 1;
            text-align: center;
        }

        .card-category .badge {
            font-weight: 500;
            padding: 0.4rem 0.8rem;
            border-radius: 30px;
        }

        .card-title {
            font-size: 1rem;
            line-height: 1.4;
            margin-bottom: 0.5rem;
        }

        .card-title a {
            transition: var(--transition);
        }

        .card-title a:hover {
            color: var(--primary-color) !important;
        }

        .card-text {
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .read-more {
            opacity: 0.8;
            transition: var(--transition);
        }

        .news-card:hover .read-more {
            opacity: 1;
        }

        /* Premium Pagination */
        .premium-pagination .page-link {
            border: none;
            margin: 0 3px;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: 500;
            color: var(--text-dark);
            transition: var(--transition);
        }

        .premium-pagination .page-item.active .page-link {
            background-color: var(--primary-color);
            color: var(--white);
            box-shadow: 0 5px 15px rgba(58, 107, 86, 0.3);
        }

        .premium-pagination .page-link:hover {
            background-color: var(--light-bg);
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Responsive Adjustments - Improved for Mobile */
        @media (min-width: 992px) {
            .carousel-item {
                height: 70vh;
                min-height: 450px;
            }

            .carousel-caption {
                bottom: 20%;
            }


            .carousel-caption p {
                font-size: 1.2rem;
            }

            .card-img-wrapper {
                height: 220px;
            }

            .card-title {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 991px) {
            .carousel-item {
                height: 60vh;
                min-height: 350px;
            }

            .section-header h2 {
                font-size: 1.4rem;
            }
        }

        @media (max-width: 767px) {
            .carousel-item {
                height: 50vh;
                min-height: 300px;
            }

            .carousel-caption {
                bottom: 15%;
                padding: 1rem;
            }

            .carousel-caption h2 {
                font-size: 1.5rem;
                margin-bottom: 0.5rem;
            }

            .carousel-caption p {
                font-size: 0.9rem;
                margin-bottom: 0.5rem;
            }

            .carousel-caption .btn {
                padding: 0.4rem 1rem;
                font-size: 0.85rem;
            }

            .custom-indicators {
                bottom: 10px;
            }

            .custom-indicators button {
                width: 8px;
                height: 8px;
                margin: 0 3px;
            }

            .section-header h6 {
                font-size: 0.8rem;
            }

            .section-header h2 {
                font-size: 1rem;
            }

            .section-header p {
                font-size: 0.9rem;
            }

            .separator-line {
                width: 40px;
            }

            .separator-icon {
                font-size: 0.9rem;
            }

            .news-card {
                margin-bottom: 15px;
            }
        }

        @media (max-width: 575px) {
            .carousel-item {
                height: 40vh;
                min-height: 250px;
            }

            .carousel-caption {
                bottom: 20%;
                padding: 0.8rem;
            }

            .carousel-caption h2 {
                font-size: 1rem;
                margin-bottom: 0.3rem;
            }

            .carousel-caption p {
                font-size: 0.8rem;
                margin-bottom: 0.3rem;
            }

            .carousel-caption .btn {
                padding: 0.3rem 0.8rem;
                font-size: 0.75rem;
            }

            .premium-control {
                width: 30px;
                height: 30px;
            }

            .carousel-control-icon {
                width: 30px;
                height: 30px;
                font-size: 0.8rem;
            }

            .card-img-wrapper {
                height: 160px;
            }

            .card-date-badge {
                font-size: 0.8rem;
                padding: 5px 10px;
            }

            .card-body {
                padding: 0.8rem;
            }

            .card-category .badge {
                padding: 0.3rem 0.6rem;
                font-size: 0.7rem;
            }

            .card-title {
                font-size: 0.95rem;
            }

            .card-text {
                font-size: 0.8rem;
                margin-bottom: 0.5rem;
            }

            .card-footer {
                padding: 0.8rem;
                font-size: 0.75rem;
            }

            .premium-pagination .page-link {
                width: 30px;
                height: 30px;
                font-size: 0.8rem;
            }
        }

        /* Animation Keyframes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/blog/news.blade.php ENDPATH**/ ?>