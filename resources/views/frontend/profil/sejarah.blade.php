@extends('frontend.home.landingpage')

@section('content')
    <section class="news-article-section py-8 bg-light">
        <div class="container">

            <div class="row">
                @forelse ($sejarahs as $index => $sejarah)
                    <div class="col-12">
                        <h2 class="judul-sejarah text-center mb-5">
                            <span class="highlight-orange">Sejarah</span>
                            <span class="highlight-green">MA NU Luthful Ulum</span>
                        </h2>


                        <img src="{{ asset('storage/sejarah_images/' . $sejarah->img) }}" alt="Gedung MA NU Luthful Ulum"
                            class="img-fluid mb-4 rounded">
                        <p class="text-justify">
                            {!! nl2br(e($sejarah->deskripsi)) !!}
                        </p>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">Tidak ada data sejarah yang tersedia.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection

<style>
    .judul-sejarah {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        margin-top: 40px;
        font-size: 28px;
        letter-spacing: 1px;
        text-align: center;
    }

    .highlight-orange {
        color: #FF9F00;
    }

    .highlight-green {
        color: #3A6B56;
    }

    @media (max-width: 768px) {
        .judul-sejarah {
            font-size: 24px;
            margin-top: 30px;
        }
    }

    .py-8 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
    }
</style>
