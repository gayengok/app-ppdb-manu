@extends('frontend.home.landingpage')

@section('content')
    <section class="english-test-section py-8 bg-light">
        <div class="container">
            <h2 class="text-center mb-5"
                style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #3A6B56; margin-top: 30px; text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); letter-spacing: 1px; font-size: 28px;">
                <span style="color: #FF9F00;">Seleksi PPDB - </span>MA NU Luthful Ulum
            </h2>

            <div class="card">
                <div class="card-body">
                    <p class="text-center">
                        Tes seleksi ini terdiri dari 3 jenis soal. Kamu bisa memulai dari jenis soal mana saja.
                        Setiap tes hanya dapat dikerjakan sekali dalam satu waktu.
                    </p>

                    <h5 class="text-center"><b>Silakan pilih salah satu untuk memulai:</b></h5>

                    <div class="list-group mt-4">
                        <!-- Tes Verbal -->
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10" fill="#3A6B56" />
                                    <path
                                        d="M9 8c0-1.1.9-2 2-2h1c1.1 0 2 .9 2 2v8c0 1.1-.9 2-2 2h-1c-1.1 0-2-.9-2-2v-1.5m6.5-5.5c.67.83 1.07 1.86 1.07 3s-.4 2.17-1.07 3m-2-6c.33.42.57.92.67 1.5.08.48.08 1.02 0 1.5-.1.58-.34 1.08-.67 1.5"
                                        stroke="#FF9F00" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                <b>VERBAL</b>
                            </div>
                            <div>
                                <span class="text-warning"><i class="fas fa-clock"></i> 20 Menit</span>
                                <a href="{{ route('soal-verbal.index') }}" class="btn btn-success ms-3"
                                    onclick="startTest()">MULAI</a>

                                <script>
                                    function startTest() {
                                        localStorage.setItem("testStarted", "true");
                                    }
                                </script>

                            </div>
                        </div>

                        <!-- Tes Numerik -->
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="2" width="18" height="20" rx="3" fill="#3A6B56"
                                        stroke="#2C5544" stroke-width="2" />
                                    <rect x="6" y="5" width="12" height="3" rx="1" fill="#FF9F00" />
                                    <circle cx="7" cy="12" r="1.5" fill="#FF9F00" />
                                    <circle cx="12" cy="12" r="1.5" fill="#FF9F00" />
                                    <circle cx="17" cy="12" r="1.5" fill="#FF9F00" />
                                    <circle cx="7" cy="17" r="1.5" fill="#FF9F00" />
                                    <circle cx="12" cy="17" r="1.5" fill="#FF9F00" />
                                    <rect x="16" y="16" width="3" height="3" rx="1" fill="#FF9F00" />
                                </svg>

                                <b>NUMERIK</b>
                            </div>
                            <div>
                                <span class="text-warning"><i class="fas fa-clock"></i> 20 Menit</span>
                                <a href="{{ route('soal-numerik.index') }}" class="btn btn-success ms-3">MULAI</a>
                            </div>
                        </div>

                        <!-- Tes Bahasa Inggris -->
                        <div class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 3H16C17.1 3 18 3.9 18 5V19C18 20.1 17.1 21 16 21H4V3Z" fill="#3A6B56"
                                        stroke="#2C5544" stroke-width="2" />
                                    <path d="M4 6H18" stroke="#FF9F00" stroke-width="2" />
                                    <text x="7" y="14" font-size="8" fill="white" font-weight="bold">A</text>
                                    <text x="13" y="14" font-size="8" fill="white" font-weight="bold">Z</text>
                                    <b>ENGLISH</b>
                            </div>
                            <div>
                                <span class="text-warning"><i class="fas fa-clock"></i> 20 Menit</span>
                                <a href="{{ route('soal-bahasa-inggris.index') }}" class="btn btn-success ms-3">MULAI</a>
                            </div>
                        </div>
                    </div>

                    <p class="text-center mt-4">
                        <small>Untuk melihat hasil, kamu harus mengerjakan semua tipe tes di atas.</small>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    .py-8 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
    }
</style>
