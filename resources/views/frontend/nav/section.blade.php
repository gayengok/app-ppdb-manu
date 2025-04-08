@section('content')
    <div class="hero-section">
        <div class="container-fluid px-0" style="overflow: hidden;">
            <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="overlay-gradient"></div>
                        <img src="{{ asset('frontend/assets/img/Hero.jpg') }}" class="d-block w-100" alt="Kegiatan 1">
                        <div class="carousel-caption">
                            <h2 class="fw-bold text-white">MA NU LUTHFUL ULUM</h2>
                            <p class="lead">Membentuk generasi berilmu, berakhlak dan berprestasi</p>
                            <button class="btn btn-primary rounded-pill px-4 mt-2">Gabung Sekarang</button>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="overlay-gradient"></div>
                        <img src="{{ asset('frontend/assets/img/MA-NU/kegiatan-1.jpg') }}" class="d-block w-100"
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
                        <img src="{{ asset('frontend/assets/img/MA-NU/kegiatan-3.jpg') }}" class="d-block w-100"
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

    <style>
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

        /* Responsive Adjustments - Improved for Mobile */
        @media (min-width: 992px) {
            .carousel-item {
                height: 70vh;
                min-height: 450px;
            }

            .carousel-caption {
                bottom: 20%;
            }

            /* .carousel-caption h2 {
                            font-size: 2.5rem;
                        } */

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
                font-size: 1rem;
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
                font-size: 1.5rem;
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
@endsection
