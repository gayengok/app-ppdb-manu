<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frontend.head.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <!-- ======= Header ======= -->
    <?php echo $__env->make('frontend.nav.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Header -->

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Back to top button -->
    <a href="https://wa.me/1234567890" target="_blank"
        class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-whatsapp"></i>
    </a>

    <footer id="footer" class="footer">

        <?php echo $__env->make('frontend.pages.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>

    <!-- End Footer -->

    <?php echo $__env->make('frontend.pages.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/home/landingpage.blade.php ENDPATH**/ ?>