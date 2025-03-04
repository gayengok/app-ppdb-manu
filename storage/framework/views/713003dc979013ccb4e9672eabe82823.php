

<?php $__env->startSection('content'); ?>
    <section class="news-article-section py-8 bg-light">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-8 mx-auto content-container">
                    <!-- Judul Artikel -->
                    <h1 class="judul-berita" style="font-weight: 800; line-height: 1.2; text-align: center; margin: 0 auto;">
                        <?php echo e($artikel->title); ?>

                    </h1>
                    <div class="divider mb-3"></div>

                    <p class="text-center text-muted mb-4" style="position: relative; top: -10px; font-size: 1rem;">
                        <?php echo e(\Carbon\Carbon::parse($artikel->published_date)->format('d F Y')); ?> | Oleh:
                        <?php echo e($artikel->author); ?></p>

                    <!-- Tombol Berbagi -->
                    <div class="d-flex justify-content-center gap-3 social-buttons mt-4"
                        style="position: relative; top: -20px;">
                        <a href="#"
                            class="btn btn-primary rounded-circle shadow d-flex align-items-center justify-content-center"
                            title="Bagikan ke Facebook" style="width: 45px; height: 45px;">
                            <i class="bi bi-facebook fs-5"></i>
                        </a>
                        <a href="#"
                            class="btn btn-info rounded-circle shadow d-flex align-items-center justify-content-center text-white"
                            title="Bagikan ke Twitter" style="width: 45px; height: 45px;">
                            <i class="bi bi-twitter fs-5"></i>
                        </a>
                        <a href="#"
                            class="btn btn-success rounded-circle shadow d-flex align-items-center justify-content-center"
                            title="Bagikan ke WhatsApp" style="width: 45px; height: 45px;">
                            <i class="bi bi-whatsapp fs-5"></i>
                        </a>
                        <a href="#"
                            class="btn btn-danger rounded-circle shadow d-flex align-items-center justify-content-center"
                            title="Bagikan ke LinkedIn" style="width: 45px; height: 45px;">
                            <i class="bi bi-linkedin fs-5"></i>
                        </a>
                    </div>


                    <!-- Gambar Berita -->
                    <div class="text-center article-image mb-4">
                        <img src="<?php echo e(asset('storage/' . $artikel->image)); ?>" alt="Gambar Berita" class="img-fluid"
                            style="max-width: 100%; object-fit: cover;">
                    </div>



                    <!-- Isi Artikel -->
                    <div class="artikel-body" style="font-size: 1.125rem; line-height: 1.8; color: #333;">
                        <p><span style="font-size: 14.98px;"><?php echo $artikel->content; ?></span></p>
                    </div>
                </div>

                <!-- Kolom Artikel Terkait -->
                <div class="col-lg-4 mt-4 mt-lg-0" style="padding-top: 170px;">
                    <h3 class="text-center artikel-terkait">Artikel Terkait</h3>

                    <div class="row">
                        <?php $__currentLoopData = $relatedArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 mb-4">
                                <div class="card article-card">
                                    <img src="<?php echo e(asset('storage/' . $related->image)); ?>" class="card-img-top"
                                        alt="Artikel Terkait">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo e($related->title); ?></h5>
                                        <a href="<?php echo e(route('article.show', $related->id)); ?>" class="btn btn-sm btn-success">
                                            Baca Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<style>
    .py-8 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
    }

    .social-buttons a {
        transition: all 0.3s ease;
    }

    .social-buttons a:hover {
        transform: scale(1.2);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }


    .article-image img {
        max-width: 100%;
        height: 600px;
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .article-image img {
            height: 300px;
            object-fit: cover;
        }
    }


    .judul-berita {
        font-size: 2.5rem;
        font-weight: 800;
        /* line-height: 1.4; */
        text-align: center;
        margin: 0 auto;
    }

    @media (max-width: 768px) {
        .judul-berita {
            font-size: 1.8rem;
            line-height: 1.1;
        }
    }

    @media (max-width: 480px) {
        .judul-berita {
            font-size: 1.5rem;
            line-height: 1.1;
        }
    }


    .text-center {
        text-align: center;
    }

    .artikel-terkait {
        font-size: 2.2rem;
        font-weight: bold;
        color: #2c3e50;
        margin-bottom: 1.5rem;
    }

    @media (max-width: 768px) {
        .artikel-terkait {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .artikel-terkait {
            font-size: 1.5rem;
        }
    }
</style>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/blog/article.blade.php ENDPATH**/ ?>