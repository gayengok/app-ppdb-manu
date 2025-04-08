

<?php $__env->startSection('content'); ?>
    <section class="news-article-section py-8 bg-light">
        <div class="container">
            <h1>Hasil Pencarian untuk "<?php echo e($query); ?>"</h1>
            <?php if($artikels->isEmpty()): ?>
                <p>Tidak ada hasil ditemukan.</p>
            <?php else: ?>
                <ul>
                    <?php $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($artikel->title); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<style>
    .py-8 {
        padding-top: 8rem !important;
        padding-bottom: 8rem !important;
    }
</style>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/search_results.blade.php ENDPATH**/ ?>