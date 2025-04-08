@extends('frontend.home.landingpage')

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

            .section-header-2 h2 {
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

            .section-header-2 h6 {
                font-size: 0.8rem;
            }

            .section-header-2 h2 {
                font-size: 1.5rem;
            }

            .section-header-2 p {
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

        @media (max-width: 480px) {
            section {
                padding: 90px 0;
            }
        }

        @media (max-width: 480px) {
            .section-header-2 p {
                font-size: 20px;
            }
        }
    </style>


    <div class="ppdb-hero-section">
        <div class="container">
            <div class="hero-grid">
                <!-- Hero Content -->
                <div class="hero-content">
                    @forelse ($uploadpendaftarans as $item)
                        <div class="badge pulse-animation">{{ $item->deskripsi }}</div>
                    @empty
                    @endforelse
                    <h1 class="hero-title">
                        <span class="gradient-text">Penerimaan Peserta Didik Baru</span>
                    </h1>
                    <p class="hero-subtitle">
                        MA NU LUTHFUL ULUM: Membentuk Generasi Unggul, Berakhlak, dan Berprestasi
                    </p>
                    <div class="hero-cta">
                        <a href="{{ route('login_siswa') }}" class="cta-primary">
                            Daftar Sekarang <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#informasi" class="cta-secondary">
                            Informasi Lengkap
                        </a>
                    </div>
                </div>

                <!-- Hero Visual -->
                <div class="hero-visual">
                    <div class="phone-mockup">
                        <div class="phone-notch"></div>
                        <div class="phone-screen">
                            @forelse ($uploadpendaftarans as $item)
                                <img src="{{ asset('storage/' . $item->image_path) }}" class="screenshot"
                                    alt="Pendaftaran Screenshot" loading="lazy">
                            @empty
                                <div class="empty-state">
                                    <div class="empty-icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <h4>Preview Pendaftaran</h4>
                                    <p>Segera hadir</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Schedule Section -->
    <section class="schedule-section right-aligned" id="informasi">
        <div class="container">
            <div class="section-header-2">
                <h2>Jadwal Pelaksanaan Pendaftaran</h2>
                <p>Informasi lengkap tahapan penerimaan peserta didik baru</p>
            </div>

            <div class="timeline-container">
                @forelse ($informasis as $informasi)
                    <div class="timeline-item">
                        <div class="timeline-marker">
                            <div class="marker-dot"></div>
                            <div class="marker-line"></div>
                        </div>
                        <div class="timeline-content">
                            <div class="timeline-header">
                                <span class="phase-badge">{{ $informasi->tahap }}</span>
                                <span class="timeline-date">
                                    <i class="fas fa-calendar-alt"></i> {{ $informasi->tanggal_formatted }}
                                </span>
                            </div>
                            <p>{{ $informasi->deskripsi }}</p>
                        </div>
                    </div>
                @empty
                    <div class="empty-timeline">
                        <div class="empty-icon">
                            <i class="fas fa-calendar-times"></i>
                        </div>
                        <h4>Tidak Ada Jadwal Tersedia</h4>
                        <p>Jadwal akan segera diumumkan</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4895ef;
            --dark: #1a1a2e;
            --light: #f8f9fa;
            --gradient: linear-gradient(135deg, var(--primary), var(--accent));
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.5;
            color: #333;
        }

        .text-center {
            text-align: center;
        }

        .ppdb-hero-section {
            padding: 2rem 1rem;
            background: var(--light);
            position: relative;
            overflow: hidden;
        }

        .hero-grid {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .hero-content {
            order: 1;
            padding: 0 1rem;
        }

        .badge {
            display: inline-block;
            background: rgba(67, 97, 238, 0.1);
            color: #28a745;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 0.8rem;
        }

        .pulse-animation {
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .hero-title {
            font-size: 1.8rem;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 1rem;
        }

        .gradient-text {
            background: #28a745;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            font-size: 1rem;
            color: #555;
            margin-bottom: 1.5rem;
        }

        .hero-cta {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .cta-primary,
        .cta-secondary {
            padding: 1rem;
            border-radius: 20px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .cta-primary {
            background: #28a745;
            color: white;
            box-shadow: 0 4px 15px rgba(118, 238, 67, 0.3);
        }

        .cta-primary:active {
            transform: translateY(2px);
        }

        .cta-secondary {
            border: 2px solid #28a745;
            color: #28a745;
        }

        .cta-secondary:active {
            background: #28a745;
            color: white;
        }



        /* Phone Mockup - Mobile Optimized */
        .hero-visual {
            order: 2;
            padding: 0 1rem;
        }

        .phone-mockup {
            width: 100%;
            max-width: 280px;
            height: 500px;
            margin: 0 auto;
            background: #fff;
            border-radius: 30px;
            /* padding: 15px 8px; */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            position: relative;
            border: 10px solid var(--dark);
        }

        .phone-notch {
            width: 40%;
            height: 20px;
            /* background: var(--dark); */
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }

        .phone-screen {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            overflow: hidden;
            background: #f5f5f5;
        }

        .screenshot {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .empty-state {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 1rem;
        }

        .empty-icon {
            font-size: 2rem;
            color: #ccc;
            margin-bottom: 1rem;
        }

        .empty-state h4 {
            color: #666;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }

        .empty-state p {
            color: #999;
            font-size: 0.9rem;
        }

        .features-section {
            padding: 2.5rem 1rem;
            background: white;
        }

        .section-header-2 {
            margin-bottom: 1.5rem;
            padding: 0 1rem;
        }

        .section-header-2 h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .section-header-2 p {
            color: #666;
            font-size: 0.95rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: rgba(67, 97, 238, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: var(--primary);
        }

        .feature-card h3 {
            font-size: 1.2rem;
            margin-bottom: 0.8rem;
            text-align: center;
        }

        .feature-card p {
            color: #666;
            font-size: 0.9rem;
            text-align: center;
            line-height: 1.5;
        }

        .schedule-section {
            padding: 2.5rem 1rem;
            /* background: #f9fafc; */
        }

        .schedule-section.right-aligned {
            margin-left: 150px;
            max-width: 900px;
            padding: 2.5rem 1rem;
            transition: all 0.3s ease;
        }

        /* Responsive Adjustments */
        @media (max-width: 1200px) {
            .schedule-section.right-aligned {
                margin-left: 100px;
                max-width: 800px;
            }
        }

        @media (max-width: 992px) {
            .schedule-section.right-aligned {
                margin-left: 80px;
                max-width: calc(100% - 80px);
                padding: 2rem 1rem;
            }

            .right-timeline {
                margin-left: 40px;
            }

            .timeline-marker {
                left: -1.8rem;
            }
        }

        @media (max-width: 768px) {
            .schedule-section.right-aligned {
                margin-left: 60px;
                max-width: calc(100% - 60px);
            }

            .right-timeline {
                margin-left: 30px;
                padding-left: 1.5rem;
            }

            .timeline-content {
                padding: 1.2rem;
            }

            .timeline-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
        }

        @media (max-width: 576px) {
            .schedule-section.right-aligned {
                margin-left: 30px;
                max-width: calc(100% - 30px);
                padding: 1.5rem 0.5rem;
            }

            .right-timeline {
                margin-left: 20px;
                padding-left: 1rem;
            }

            .timeline-marker {
                left: -1.5rem;
            }

            .marker-dot {
                width: 14px;
                height: 14px;
            }

            .section-header-2 h2 {
                font-size: 1.5rem;
            }

            .timeline-content {
                padding: 1rem;
            }
        }

        @media (max-width: 768px) and (orientation: landscape) {
            .schedule-section.right-aligned {
                margin-left: 40px;
                max-width: calc(100% - 40px);
            }
        }


        @media (max-width: 400px) {
            .schedule-section.right-aligned {
                margin-left: 20px;
                max-width: calc(100% - 20px);
            }

            .right-timeline {
                margin-left: 15px;
            }

            .timeline-marker {
                left: -1.3rem;
            }
        }

        .timeline-container {
            position: relative;
            padding-left: 1.5rem;
        }

        .timeline-container::before {
            content: '';
            position: absolute;
            left: 6px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: rgba(67, 97, 238, 0.1);
        }

        .timeline-item {
            position: relative;
            padding-bottom: 1.5rem;
        }

        .timeline-marker {
            position: absolute;
            left: -1.5rem;
            top: 5px;
        }

        .marker-dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: var(--primary);
            border: 3px solid white;
            box-shadow: 0 0 0 2px rgba(67, 97, 238, 0.2);
        }

        .timeline-content {
            padding-left: 1rem;
        }

        .phase-badge {
            display: inline-block;
            background: rgba(67, 97, 238, 0.1);
            color: var(--primary);
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.8rem;
            margin-bottom: 0.5rem;
        }

        .timeline-date {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #666;
            font-size: 0.85rem;
            margin-bottom: 0.5rem;
        }

        .timeline-date i {
            color: var(--accent);
            font-size: 0.9rem;
        }

        .timeline-content p {
            color: #555;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .empty-timeline {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .empty-timeline .empty-icon {
            font-size: 2rem;
            color: #ccc;
            margin-bottom: 1rem;
        }

        .empty-timeline h4 {
            color: #666;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }

        .empty-timeline p {
            color: #999;
            font-size: 0.9rem;
        }

        /* Tablet Styles */
        @media (min-width: 768px) {
            .ppdb-hero-section {
                padding: 3rem 2rem;
            }

            .hero-grid {
                flex-direction: row;
                align-items: center;
                max-width: 1200px;
                margin: 0 auto;
            }

            .hero-content {
                order: 1;
                flex: 1;
                padding-right: 2rem;
                text-align: left;
            }

            .hero-visual {
                order: 2;
                flex: 1;
            }

            .hero-title {
                font-size: 2.2rem;
            }

            .hero-cta {
                flex-direction: row;
                justify-content: flex-start;
            }

            .features-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .timeline-container {
                padding-left: 2rem;
            }
        }

        /* Desktop Styles */
        @media (min-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .phone-mockup {
                max-width: 320px;
                height: 550px;
            }
        }
    </style>
@endsection
