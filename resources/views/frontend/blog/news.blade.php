@extends('frontend.home.landingpage')

@section('content')
    <div class="container my-4" style="padding-top: 60px; max-height: 100vh;">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/assets/img/MA-NU/kegiatan-1.jpg') }}" class="d-block w-100"
                                alt="Judul Berita 1" style=" object-fit: cover;">
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/assets/img/MA-NU/kegiatan-2.jpg') }}" class="d-block w-100"
                                alt="Judul Berita 2" style="object-fit: cover;">
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/assets/img/MA-NU/kegiatan-3.jpg') }}" class="d-block w-100"
                                alt="Judul Berita 3" style="object-fit: cover;">
                        </div>


                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <style>
        .custom-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(18, 16, 16, 0.868), rgba(255, 255, 255, 0));
            padding: 20px;
            border-radius: 10px;
            text-align: left;
        }

        .carousel-item img {
            height: auto;
            max-height: 500px;
            object-fit: cover;
        }

        .carousel-caption h5 {
            font-size: 2.5rem;
            color: #333;
        }

        .carousel-caption p {
            font-size: 1.2rem;
            color: #555;
        }

        @media (max-width: 768px) {
            .carousel-caption h5 {
                font-size: 1.8rem;
            }

            .carousel-caption p {
                font-size: 1rem;
            }
        }

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

        .carousel-item img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .carousel-item img {
                height: 350px;
            }
        }

        @media (max-width: 480px) {
            .carousel-item img {
                height: 250px;
            }
        }
    </style>


    <h2 class="text-center mb-5 custom-title"
        style="font-family: 'Roboto', sans-serif; font-weight: 700; margin-top: 30px; color: #3A6B56;">
        Berita Terbaru
    </h2>



    <div class="py-4">
        <div class="container">
            <div class="row g-4"> <!-- Tambahkan g-4 untuk jarak antar kolom -->
                @foreach ($artikels as $index => $artikel)
                    <!-- Blog Card -->
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('storage/' . $artikel->image) }}" class="card-img-top img-fluid rounded"
                                alt="Berita {{ $index + 1 }}" style="height: 250px; object-fit: cover;">
                            <div class="card-body">
                                <a href="{{ route('article.show', $artikel->id) }}" class="text-decoration-none text-dark">
                                    <p class="card-date text-muted" style="font-size: 12px;">
                                        {{ \Carbon\Carbon::parse($artikel->published_date)->format('d M Y') }}
                                    </p>
                                    <h5 class="card-title"
                                        style="font-weight: 500; font-size: 16px; font-family: 'Poppins', sans-serif;">
                                        {{ $artikel->title }}
                                    </h5>
                                    <p class="card-text" style="font-size: 12px;">{{ $artikel->short_description }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            {{ $artikels->links('pagination::bootstrap-5') }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="py-4">
        <div class="container">
            <div class="row">
                <!-- Blog Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('frontend/assets/img/blog/blog-1.jpg') }}" class="card-img-top" alt="Berita 1">
                        <div class="card-body">
                            <p class="card-date" style="font-size: 12px;">28 Oktober 2024, 21:20 WIB</p>
                            <h5 class="card-title">Judul Berita atau Blog 1</h5>
                            <p class="card-text">Ringkasan berita atau blog singkat tentang topik utama dari artikel
                                ini.</p>
                            <a href="{{ route('article.blog') }}" class="btn"
                                style="background-color: green; color: white;">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('frontend/assets/img/blog/blog-1.jpg') }}" class="card-img-top" alt="Berita 1">
                        <div class="card-body">
                            <p class="card-date" style="font-size: 12px;">28 Oktober 2024, 21:20 WIB</p>
                            <h5 class="card-title">Judul Berita atau Blog 1</h5>
                            <p class="card-text">Ringkasan berita atau blog singkat tentang topik utama dari artikel
                                ini.</p>
                            <a href="{{ route('article.blog') }}" class="btn"
                                style="background-color: green; color: white;">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Blog Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('frontend/assets/img/blog/blog-1.jpg') }}" class="card-img-top" alt="Berita 1">
                        <div class="card-body">
                            <p class="card-date" style="font-size: 12px;">28 Oktober 2024, 21:20 WIB</p>
                            <h5 class="card-title">Judul Berita atau Blog 1</h5>
                            <p class="card-text">Ringkasan berita atau blog singkat tentang topik utama dari artikel
                                ini.</p>
                            <a href="{{ route('article.blog') }}" class="btn"
                                style="background-color: green; color: white;">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
