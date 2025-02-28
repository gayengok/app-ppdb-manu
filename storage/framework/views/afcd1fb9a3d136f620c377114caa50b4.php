<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MA NU LUTHFUL ULUM - Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="<?php echo e(asset('backend/assets/img/logo-MA.png')); ?>" type="image/x-icon" />


    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.css" />

    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>


    <!-- Fonts and icons -->
    <script src="<?php echo e(asset('backend/assets/js/plugin/webfont/webfont.min.js')); ?>"></script>

    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["<?php echo e(asset('backend/assets/css/fonts.min.css')); ?>"]
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/plugins.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/kaiadmin.min.css')); ?>" />


    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/demo.css')); ?>" />

    <style>
        .navbar-brand-text {
            font-size: 24px;
            font-weight: bold;
            margin-left: 12px;
            margin-top: -2px;
            color: #ebeced;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-family: 'Merriweather', serif;
            transition: color 0.3s ease;
        }

        .navbar-brand {
            display: inline-block;
            margin-bottom: 10px;
            height: 35px;
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="<?php echo e(route('dashboard')); ?>" class="logo">
                        <img src="<?php echo e(asset('backend/assets/img/kaiadmin/logo-MA.svg')); ?>" alt="navbar brand"
                            class="navbar-brand" height="35" />
                        <span class="navbar-brand-text">MA NU LU</span>
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>

            <?php echo $__env->make('backend.app.menu.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <!-- End Sidebar -->

        <div class="main-panel">

            <?php echo $__env->make('backend.app.menu.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="container">

                <?php echo $__env->make('backend.app.menu.page-inner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

            <footer class="footer">

                <?php echo $__env->make('backend.app.menu.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </footer>
        </div>

        <!-- End Custom template -->
    </div>
    <!-- Core JS Files -->
    <script src="<?php echo e(asset('backend/assets/js/core/jquery-3.7.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/core/bootstrap.min.js')); ?>"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?php echo e(asset('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?>"></script>

    <!-- Chart JS -->
    <script src="<?php echo e(asset('backend/assets/js/plugin/chart.js/chart.min.js')); ?>"></script>

    <!-- jQuery Sparkline -->
    <script src="<?php echo e(asset('backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')); ?>"></script>

    <!-- Chart Circle -->
    <script src="<?php echo e(asset('backend/assets/js/plugin/chart-circle/circles.min.js')); ?>"></script>

    <!-- Datatables -->
    <script src="<?php echo e(asset('backend/assets/js/plugin/datatables/datatables.min.js')); ?>"></script>

    <!-- Bootstrap Notify -->
    <script src="<?php echo e(asset('backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?>"></script>

    <!-- jQuery Vector Maps -->
    <script src="<?php echo e(asset('backend/assets/js/plugin/jsvectormap/jsvectormap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/plugin/jsvectormap/world.js')); ?>"></script>

    <!-- Sweet Alert -->
    <script src="<?php echo e(asset('backend/assets/js/plugin/sweetalert/sweetalert.min.js')); ?>"></script>

    <!-- Kaiadmin JS -->
    <script src="<?php echo e(asset('backend/assets/js/kaiadmin.min.js')); ?>"></script>


    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="<?php echo e(asset('backend/assets/js/setting-demo.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/demo.js')); ?>"></script>


    <script>
        $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#177dff",
            fillColor: "rgba(23, 125, 255, 0.14)",
        });

        $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#f3545d",
            fillColor: "rgba(243, 84, 93, .14)",
        });

        $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#ffa534",
            fillColor: "rgba(255, 165, 52, .14)",
        });
    </script>
</body>

</html>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/app/dashboard/dashboard.blade.php ENDPATH**/ ?>