<section id="hero" class="hero-section">

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('frontend/assets/img/gedung.svg')); ?>" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('frontend/assets/img/siswa.svg')); ?>" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo e(asset('frontend/assets/img/siswa-1.svg')); ?>" class="d-block w-100" alt="Image 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    </div>
</section>

<style>
    /* .carousel-item img {
        transform: translateY(20px);
    } */

    .header {
        background-color: #28a745;
    }

    .navbar ul li a {
        font-size: 18px;
    }

    #hero .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 4px;
    }

    #hero-carousel {
        height: 600px;
    }

    #hero .carousel-inner {
        height: 100%;
    }
</style>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/nav/section.blade.php ENDPATH**/ ?>