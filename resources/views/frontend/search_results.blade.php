@extends('frontend.home.landingpage')

@section('content')
    <section class="news-article-section py-8 bg-light">
        <div class="container">
            <h1>Hasil Pencarian untuk "{{ $query }}"</h1>
            @if ($artikels->isEmpty())
                <p>Tidak ada hasil ditemukan.</p>
            @else
                <ul>
                    @foreach ($artikels as $index => $artikel)
                        <li>{{ $artikel->title }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </section>
@endsection
<style>
    .py-8 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important;
    }
</style>
