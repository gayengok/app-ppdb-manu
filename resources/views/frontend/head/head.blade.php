<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MA NU LUTHFUL ULUM</title>
    <meta content="Website resmi MA NU Luthful Ulum, informasi pendidikan madrasah terbaik." name="description">
    <meta content="madrasah, pendidikan, MA NU Luthful Ulum" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/logo-MA.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/logo-MA.png') }}" rel="apple-touch-icon">

    <!-- Open Graph Meta Tags -->
    @if (Request::is('/'))
        <meta property="og:title" content="MA NU LUTHFUL ULUM">
        <meta property="og:description"
            content="Website resmi MA NU Luthful Ulum, pusat informasi pendidikan madrasah.">
        <meta property="og:image" content="{{ asset('frontend/assets/img/logo-MA.png') }}">
    @elseif (Request::is('news'))
        <meta property="og:title" content="Berita MA NU LUTHFUL ULUM">
        <meta property="og:description" content="Berita terbaru dan informasi terkini dari MA NU Luthful Ulum.">
        <meta property="og:image" content="{{ asset('frontend/assets/img/logo-MA.png') }}">
    @elseif (Request::is('galery'))
        <meta property="og:title" content="Galeri MA NU LUTHFUL ULUM">
        <meta property="og:description" content="Lihat berbagai momen berharga di MA NU Luthful Ulum.">
        <meta property="og:image" content="{{ asset('frontend/assets/img/logo-MA.png') }}">
    @elseif (Request::is('videos'))
        <meta property="og:title" content="Video MA NU LUTHFUL ULUM">
        <meta property="og:description" content="Kumpulan video dokumentasi kegiatan MA NU Luthful Ulum.">
        <meta property="og:image" content="{{ asset('frontend/assets/img/logo-MA.png') }}">
    @elseif (Request::is('sejarah'))
        <meta property="og:title" content="Sejarah MA NU LUTHFUL ULUM">
        <meta property="og:description"
            content="Sejarah dan perjalanan panjang MA NU Luthful Ulum dalam dunia pendidikan.">
        <meta property="og:image" content="{{ asset('frontend/assets/img/logo-MA.png') }}">
    @elseif (Request::is('visi-misi'))
        <meta property="og:title" content="Visi & Misi MA NU LUTHFUL ULUM">
        <meta property="og:description" content="Visi dan misi MA NU Luthful Ulum dalam membentuk generasi unggul.">
        <meta property="og:image" content="{{ asset('frontend/assets/img/logo-MA.png') }}">
    @elseif (Request::is('contact'))
        <meta property="og:title" content="Kontak MA NU LUTHFUL ULUM">
        <meta property="og:description" content="Hubungi MA NU Luthful Ulum untuk informasi lebih lanjut.">
        <meta property="og:image" content="{{ asset('frontend/assets/img/logo-MA.png') }}">
    @elseif ($artikel)
        <meta property="og:title" content="{{ $artikel->title }}">
        <meta property="og:description" content="{{ $artikel->short_description }}">
        <meta property="og:image" content="{{ asset('storage/' . $artikel->image) }}">
    @endif

    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">


    <!-- Twitter Card Meta Tags -->
    {{-- @if (Request::is('/'))
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="MA NU LUTHFUL ULUM">
        <meta name="twitter:description"
            content="Website resmi MA NU Luthful Ulum, pusat informasi pendidikan madrasah.">
        <meta name="twitter:image" content="{{ asset('frontend/assets/img/logo-MA.png') }}">
    @elseif ($artikel)
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $artikel->title }}">
        <meta name="twitter:description" content="{{ $artikel->short_description }}">
        <meta name="twitter:image" content="{{ asset('storage/' . $artikel->image) }}">
    @endif --}}
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:site" content="@akun_twitter_sekolah">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
