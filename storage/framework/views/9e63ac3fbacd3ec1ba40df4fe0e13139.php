<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MA NU LUTHFUL ULUM</title>
    <meta content="Website resmi MA NU Luthful Ulum, informasi pendidikan madrasah terbaik." name="description">
    <meta content="madrasah, pendidikan, MA NU Luthful Ulum" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(asset('frontend/assets/img/logo-MA.png')); ?>" rel="icon">
    <link href="<?php echo e(asset('frontend/assets/img/logo-MA.png')); ?>" rel="apple-touch-icon">

    <!-- Open Graph Meta Tags -->
    <?php if(Request::is('/')): ?>
        <meta property="og:title" content="MA NU LUTHFUL ULUM">
        <meta property="og:description"
            content="Website resmi MA NU Luthful Ulum, pusat informasi pendidikan madrasah.">
        <meta property="og:image" content="<?php echo e(asset('frontend/assets/img/logo-MA.png')); ?>">
    <?php elseif(Request::is('news')): ?>
        <meta property="og:title" content="Berita MA NU LUTHFUL ULUM">
        <meta property="og:description" content="Berita terbaru dan informasi terkini dari MA NU Luthful Ulum.">
        <meta property="og:image" content="<?php echo e(asset('frontend/assets/img/logo-MA.png')); ?>">
    <?php elseif(Request::is('galery')): ?>
        <meta property="og:title" content="Galeri MA NU LUTHFUL ULUM">
        <meta property="og:description" content="Lihat berbagai momen berharga di MA NU Luthful Ulum.">
        <meta property="og:image" content="<?php echo e(asset('frontend/assets/img/logo-MA.png')); ?>">
    <?php elseif(Request::is('videos')): ?>
        <meta property="og:title" content="Video MA NU LUTHFUL ULUM">
        <meta property="og:description" content="Kumpulan video dokumentasi kegiatan MA NU Luthful Ulum.">
        <meta property="og:image" content="<?php echo e(asset('frontend/assets/img/logo-MA.png')); ?>">
    <?php elseif(Request::is('sejarah')): ?>
        <meta property="og:title" content="Sejarah MA NU LUTHFUL ULUM">
        <meta property="og:description"
            content="Sejarah dan perjalanan panjang MA NU Luthful Ulum dalam dunia pendidikan.">
        <meta property="og:image" content="<?php echo e(asset('frontend/assets/img/logo-MA.png')); ?>">
    <?php elseif(Request::is('visi-misi')): ?>
        <meta property="og:title" content="Visi & Misi MA NU LUTHFUL ULUM">
        <meta property="og:description" content="Visi dan misi MA NU Luthful Ulum dalam membentuk generasi unggul.">
        <meta property="og:image" content="<?php echo e(asset('frontend/assets/img/logo-MA.png')); ?>">
    <?php elseif(Request::is('contact')): ?>
        <meta property="og:title" content="Kontak MA NU LUTHFUL ULUM">
        <meta property="og:description" content="Hubungi MA NU Luthful Ulum untuk informasi lebih lanjut.">
        <meta property="og:image" content="<?php echo e(asset('frontend/assets/img/logo-MA.png')); ?>">
    <?php elseif($artikel): ?>
        <meta property="og:title" content="<?php echo e($artikel->title); ?>">
        <meta property="og:description" content="<?php echo e($artikel->short_description); ?>">
        <meta property="og:image" content="<?php echo e(asset('storage/' . $artikel->image)); ?>">
    <?php endif; ?>

    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">


    <!-- Twitter Card Meta Tags -->
    
    <meta name="twitter:url" content="<?php echo e(url()->current()); ?>">
    <meta name="twitter:site" content="@akun_twitter_sekolah">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('frontend/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('frontend/assets/css/style.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/head/head.blade.php ENDPATH**/ ?>