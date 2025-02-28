<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('frontend.head.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <!-- ======= Header ======= -->

    <?php echo $__env->make('frontend.nav.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('frontend.nav.section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <?php echo $__env->make('frontend.pages.section.section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- End Hero -->
    <a href="https://wa.me/1234567890" target="_blank"
        class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Bagian konten lainnya -->

    <?php echo $__env->make('frontend.pages.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- Bagian konten lainnya -->

    <?php echo $__env->make('frontend.pages.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/pages/landingpage.blade.php ENDPATH**/ ?>