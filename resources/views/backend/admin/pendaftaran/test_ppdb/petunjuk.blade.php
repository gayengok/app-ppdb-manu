@extends('backend.admin.app.app_siswa')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <!-- Main Card -->
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <!-- Header with modern gradient -->
                    <div class="card-header p-4" style="background: linear-gradient(135deg, #00c853, #64dd17);">
                        <h4 class="card-title text-white mb-0 d-flex align-items-center">
                            <i class="fas fa-newspaper me-3 fs-3"></i>
                            <span class="fw-bold letter-spacing-1">PETUNJUK PENGERJAAN</span>
                        </h4>
                    </div>

                    <!-- Card Body with subtle pattern background -->
                    <div class="card-body p-0">
                        <div class="p-5"
                            style="background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCI+CjxyZWN0IHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgZmlsbD0id2hpdGUiPjwvcmVjdD4KPHBhdGggZD0iTTAgMEw2MCA2MEgwVjBaIiBmaWxsPSIjZjhmOGY4Ij48L3BhdGg+Cjwvc3ZnPg==');">

                            <!-- Introduction banner -->
                            <div class="alert alert-light border-start border-5 border-success shadow mb-5 rounded-3 p-4">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-lightbulb-fill text-success fs-1"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="fw-bold mb-1 text-success">Panduan Mengerjakan Ujian</h5>
                                        <p class="fs-5 fw-medium mb-0">
                                            Silakan baca petunjuk di bawah ini sebelum mengerjakan soal.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Timeline style instructions -->
                            <div class="instruction-list position-relative ps-4">
                                <!-- Vertical line -->
                                <div class="vertical-line"></div>

                                <!-- Instruction 1 -->
                                <div class="instruction-item d-flex align-items-start mb-4 position-relative zoom-on-hover">
                                    <div class="instruction-icon me-3">
                                        <span class="badge rounded-circle p-3 bg-success shadow-sm pulse">
                                            <i class="bi bi-book text-white fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="instruction-text p-3 bg-white rounded-3 shadow-sm border-light w-100">
                                        <p class="fs-5 mb-0 fw-medium">Pastikan Anda sudah membaca semua soal dengan baik
                                            sebelum
                                            menjawab.</p>
                                    </div>
                                </div>

                                <!-- Instruction 2 -->
                                <div class="instruction-item d-flex align-items-start mb-4 position-relative zoom-on-hover">
                                    <div class="instruction-icon me-3">
                                        <span class="badge rounded-circle p-3 bg-success shadow-sm pulse">
                                            <i class="bi bi-list-ol text-white fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="instruction-text p-3 bg-white rounded-3 shadow-sm border-light w-100">
                                        <p class="fs-5 mb-0 fw-medium">Setiap soal memiliki 4 pilihan jawaban: A, B, C, dan
                                            D.</p>
                                    </div>
                                </div>

                                <!-- Instruction 3 -->
                                <div class="instruction-item d-flex align-items-start mb-4 position-relative zoom-on-hover">
                                    <div class="instruction-icon me-3">
                                        <span class="badge rounded-circle p-3 bg-success shadow-sm pulse">
                                            <i class="bi bi-hand-index-thumb text-white fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="instruction-text p-3 bg-white rounded-3 shadow-sm border-light w-100">
                                        <p class="fs-5 mb-0 fw-medium">Pilih jawaban yang paling benar dengan mengklik opsi
                                            yang
                                            sesuai.</p>
                                    </div>
                                </div>

                                <!-- Instruction 4 -->
                                <div class="instruction-item d-flex align-items-start mb-4 position-relative zoom-on-hover">
                                    <div class="instruction-icon me-3">
                                        <span class="badge rounded-circle p-3 bg-success shadow-sm pulse">
                                            <i class="bi bi-send-check text-white fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="instruction-text p-3 bg-white rounded-3 shadow-sm border-light w-100">
                                        <p class="fs-5 mb-0 fw-medium">Setelah selesai mengerjakan semua soal, klik tombol
                                            "Selesai"
                                            untuk mengirim jawaban.</p>
                                    </div>
                                </div>

                                <!-- Instruction 5 -->
                                <div class="instruction-item d-flex align-items-start mb-4 position-relative zoom-on-hover">
                                    <div class="instruction-icon me-3">
                                        <span class="badge rounded-circle p-3 bg-success shadow-sm pulse">
                                            <i class="bi bi-calculator text-white fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="instruction-text p-3 bg-white rounded-3 shadow-sm border-light w-100">
                                        <p class="fs-5 mb-0 fw-medium">Skor akan dihitung berdasarkan jumlah jawaban yang
                                            benar.</p>
                                    </div>
                                </div>

                                <!-- Instruction 6 -->
                                <div class="instruction-item d-flex align-items-start mb-5 position-relative zoom-on-hover">
                                    <div class="instruction-icon me-3">
                                        <span class="badge rounded-circle p-3 bg-success shadow-sm pulse">
                                            <i class="bi bi-wifi text-white fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="instruction-text p-3 bg-white rounded-3 shadow-sm border-light w-100">
                                        <p class="fs-5 mb-0 fw-medium">Pastikan koneksi internet Anda stabil selama
                                            mengerjakan tes.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- PHP Status Check -->
                            @php
                                use App\Models\Setting;
                                $status = optional(Setting::first())->quiz_status ?? false;
                            @endphp

                            <!-- Button Container with Animation -->
                            <div class="text-center mt-5">
                                <form action="{{ route('quiz.index') }}" method="GET">
                                    <button type="submit"
                                        class="btn btn-lg btn-success rounded-pill px-5 py-3 shadow-lg fw-bold position-relative overflow-hidden start-btn"
                                        style="min-width: 280px;"
                                        @if (!$status) disabled style="pointer-events: none; opacity: 0.5;" @endif>
                                        <i class="bi bi-play-circle-fill me-2 fs-4"></i>
                                        <span class="position-relative z-index-1">MULAI MENGERJAKAN</span>
                                        <span class="btn-overlay"></span>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Support Info Card -->
                <div class="card mt-4 border-0 shadow rounded-3 info-card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 ms-3">
                                <h5 class="fw-bold mb-1">Butuh Bantuan?</h5>
                                <p class="mb-0">Jika Anda mengalami kesulitan, silakan hubungi admin melalui tombol
                                    bantuan.</p>
                            </div>
                            <a href="#" class="btn btn-outline-info rounded-pill px-4">
                                <i class="bi bi-question-circle me-2"></i>Bantuan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Font settings */
        body {
            font-family: 'Poppins', sans-serif;
        }

        .letter-spacing-1 {
            letter-spacing: 1px;
        }

        /* Card styling */
        .rounded-4 {
            border-radius: 1rem !important;
        }

        /* Vertical timeline styling */
        .vertical-line {
            position: absolute;
            left: 24px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, rgba(40, 167, 69, 0.2), rgba(40, 167, 69, 0.8));
            z-index: 0;
        }

        /* Instruction item styling */
        .instruction-text {
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .instruction-item {
            z-index: 1;
        }

        .zoom-on-hover:hover .instruction-text {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08) !important;
            border-left: 3px solid #28a745;
        }

        /* Badge and icon styling */
        .instruction-icon .badge {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            border: 2px solid white;
            z-index: 1;
        }

        .instruction-icon i {
            font-size: 1.25rem;
        }

        /* Pulse animation for badges */
        .pulse {
            position: relative;
        }

        .pulse::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 50%;
            background: rgba(40, 167, 69, 0.5);
            animation: pulse 2s infinite;
            z-index: -1;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.8;
            }

            70% {
                transform: scale(1.5);
                opacity: 0;
            }

            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        /* Button styling */
        .btn-success {
            background: linear-gradient(135deg, #00c853, #64dd17);
            border: none;
            transition: all 0.3s ease;
        }

        .start-btn {
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .start-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 200, 83, 0.3) !important;
        }

        .btn-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%,
                    transparent 50%, rgba(255, 255, 255, 0.2) 50%,
                    rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
            background-size: 25px 25px;
            animation: move-background 2s linear infinite;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .start-btn:hover .btn-overlay {
            opacity: 1;
        }

        @keyframes move-background {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 50px 50px;
            }
        }

        /* Support card styling */
        .info-card {
            transition: all 0.3s ease;
            overflow: hidden;
            background: linear-gradient(to right, rgba(240, 249, 255, 0.8), rgba(255, 255, 255, 0.9));
        }

        .info-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
        }



        /* Responsive adjustments */
        @media (max-width: 768px) {
            .instruction-text p {
                font-size: 1rem !important;
            }

            .instruction-icon .badge {
                width: 40px;
                height: 40px;
            }

            .instruction-icon i {
                font-size: 1rem;
            }

            .btn-lg {
                font-size: 1rem;
                padding: 0.6rem 1.8rem !important;
            }

            .vertical-line {
                left: 20px;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding: 15px !important;
            }

            .card-header {
                padding: 1rem !important;
            }

            .card-body>div {
                padding: 1.5rem !important;
            }

            .instruction-text {
                padding: 0.75rem !important;
            }

            .instruction-icon .badge {
                padding: 0.5rem !important;
                width: 35px;
                height: 35px;
            }

            .vertical-line {
                left: 17px;
            }
        }
    </style>
@endsection
