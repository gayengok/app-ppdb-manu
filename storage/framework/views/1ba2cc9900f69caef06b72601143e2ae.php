

<?php $__env->startSection('content'); ?>
    <section class="news-article-section py-8 bg-light">
        <div class="container">

            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $sejarahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $sejarah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-12">
                        <h2 class="judul-sejarah text-center mb-5">
                            <span class="highlight-orange">Sejarah</span>
                            <span class="highlight-green">MA NU Luthful Ulum</span>
                        </h2>


                        <img src="<?php echo e(asset('storage/sejarah_images/' . $sejarah->img)); ?>" alt="Gedung MA NU Luthful Ulum"
                            class="img-fluid mb-4 rounded">
                        <p class="text-justify">
                            <?php echo nl2br(e($sejarah->deskripsi)); ?>

                        </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12">
                        <p class="text-center">Tidak ada data sejarah yang tersedia.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

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
</style>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/profil/sejarah.blade.php ENDPATH**/ ?>