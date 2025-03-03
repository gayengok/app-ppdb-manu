@extends('frontend.home.landingpage')

@section('content')
    <section class="news-article-section py-8 bg-light">
        <div class="container my-5">
            <h2 class="text-center mb-5 custom-title"
                style="font-family: 'Roboto', sans-serif; font-weight: 700; margin-top: 70px; color: #3A6B56;">
                Galeri Video
            </h2>

            <div class="row">
                @foreach ($videos as $video)
                    @php
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
                    @endphp

                    @if ($videoId)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/{{ $videoId }}" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $video->title }}</h5>
                                    <p class="text-danger">Video Link Tidak Valid</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection

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
