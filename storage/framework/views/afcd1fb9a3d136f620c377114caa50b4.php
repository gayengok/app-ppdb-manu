<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>MA NU LUTHFUL ULUM - Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="<?php echo e(asset('backend/assets/img/logo-MA.png')); ?>" type="image/x-icon" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

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

    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --success: #4cc9f0;
            --info: #4895ef;
            --warning: #f72585;
            --danger: #e63946;
            --light: #f8f9fa;
            --dark: #212529;
            --gray-100: #f8f9fa;
            --gray-200: #e9ecef;
            --gray-300: #dee2e6;
            --gray-400: #ced4da;
            --gray-500: #adb5bd;
            --gray-600: #6c757d;
            --gray-700: #495057;
            --gray-800: #343a40;
            --gray-900: #212529;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fb;
            color: var(--gray-800);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .dashboard-header {
            padding: 30px 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--gray-200);
            margin-bottom: 25px;
        }

        .dashboard-header h2 {
            font-size: 28px;
            font-weight: 700;
            color: var(--gray-800);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .dashboard-header h2 i {
            background: linear-gradient(45deg, var(--primary), var(--info));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .date-display {
            font-size: 14px;
            color: var(--gray-600);
            font-weight: 500;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 20px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            border-radius: 4px 0 0 4px;
        }

        .stat-card.primary::before {
            background: linear-gradient(180deg, var(--primary), var(--info));
        }

        .stat-card.info::before {
            background: linear-gradient(180deg, var(--info), var(--success));
        }

        .stat-card.success::before {
            background: linear-gradient(180deg, var(--success), #2dd4bf);
        }

        .stat-card.secondary::before {
            background: linear-gradient(180deg, var(--secondary), var(--primary));
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
            font-size: 24px;
            color: white;
        }

        .stat-card.primary .stat-icon {
            background: linear-gradient(45deg, var(--primary), var(--info));
            box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
        }

        .stat-card.info .stat-icon {
            background: linear-gradient(45deg, var(--info), var(--success));
            box-shadow: 0 4px 10px rgba(72, 149, 239, 0.3);
        }

        .stat-card.success .stat-icon {
            background: linear-gradient(45deg, var(--success), #2dd4bf);
            box-shadow: 0 4px 10px rgba(76, 201, 240, 0.3);
        }

        .stat-card.secondary .stat-icon {
            background: linear-gradient(45deg, var(--secondary), var(--primary));
            box-shadow: 0 4px 10px rgba(63, 55, 201, 0.3);
        }

        .stat-content {
            flex: 1;
        }

        .stat-label {
            font-size: 14px;
            color: var(--gray-600);
            margin-bottom: 4px;
            display: block;
        }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            color: var(--gray-800);
            line-height: 1.2;
        }

        .charts-row {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        @media (max-width: 991px) {
            .charts-row {
                grid-template-columns: 1fr;
            }
        }

        .chart-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .chart-header {
            padding: 20px;
            border-bottom: 1px solid var(--gray-200);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .chart-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--gray-800);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .chart-title i {
            color: var(--primary);
        }

        .chart-body {
            padding: 20px;
        }

        .chart-container {
            height: 350px;
            position: relative;
            margin-bottom: 20px;
        }

        .articles-summary {
            margin-top: 20px;
        }

        .articles-summary h4 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--gray-700);
        }

        .articles-summary ul {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 15px;
        }

        .articles-summary li {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: var(--gray-700);
        }

        .articles-summary li i {
            color: var(--primary);
            font-size: 12px;
        }

        .articles-summary li strong {
            font-weight: 600;
            color: var(--gray-800);
        }

        .students-chart-card {
            background: linear-gradient(135deg, var(--info), var(--primary));
            color: white;
        }

        .students-chart-card .chart-title {
            color: white;
        }

        .students-chart-card .chart-title i {
            color: white;
        }

        @media (max-width: 767px) {
            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }

            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .stat-value {
                font-size: 24px;
            }
        }

        @media screen and (max-width: 576px) {

            .container,
            .container-full {
                padding: 10px !important;
                margin: auto;
            }
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>


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