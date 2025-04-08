<div class="main-header">
    <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
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
    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <nav class="welcome-navbar">
                <div class="welcome-container">
                    <div class="welcome-marquee">
                        <div class="welcome-track">
                            <span class="welcome-text">🎉 Selamat Datang di MA NU Luthful Ulum - Sekolah Unggulan
                                Berbasis Pesantren 🎉</span>
                            <span class="welcome-text">📚 Pendidikan Berkualitas, Akhlak Mulia 📚</span>
                        </div>
                    </div>
                </div>
            </nav>

            <style>
                .welcome-container {
                    max-width: 100%;
                    overflow: hidden;
                    position: relative;
                }

                .welcome-marquee {
                    display: flex;
                    width: 100%;
                }

                .welcome-track {
                    display: flex;
                    animation: scroll 20s linear infinite;
                    white-space: nowrap;
                }

                .welcome-text {
                    display: inline-block;
                    padding: 0.3rem 2rem;
                    margin-right: 2rem;
                    font-weight: 600;
                    font-size: 0.95rem;
                    color: white;
                    background: linear-gradient(90deg, #1a3a8f, #2563eb);
                    border-radius: 50px;
                    backdrop-filter: blur(5px);
                    border: 1px solid rgba(255, 255, 255, 0.2);
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                }

                @keyframes scroll {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-50%);
                    }
                }

                /* Hover Effect */
                .welcome-marquee:hover .welcome-track {
                    animation-play-state: paused;
                }

                .welcome-text:hover {
                    background: rgba(255, 255, 255, 0.25);
                    transform: scale(1.05);
                }

                /* Responsive */
                @media (max-width: 768px) {
                    .welcome-text {
                        font-size: 0.85rem;
                        padding: 0.2rem 1.5rem;
                    }
                }
            </style>

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false" aria-haspopup="true">
                        <i class="fa fa-search"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-search animated fadeIn">
                        <form class="navbar-left navbar-form nav-search">
                            <div class="input-group">
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </form>
                    </ul>
                </li>


                


                <li class="nav-item topbar-icon dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="notification">4</span>
                    </a>
                    
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                    </a>
                    
                </li>

                <li class="nav-item topbar-user dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                        aria-expanded="false">
                        <div class="avatar-sm">
                            <i class="fa fa-user-circle fa-2x"></i>
                        </div>
                        <span class="profile-username">
                            <span class="op-7">Hi,</span>
                            <span class="fw-bold"><?php echo e($loggedInStudent->name); ?></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div
                                        class="avatar-lg d-flex align-items-center justify-content-center bg-light rounded-circle">
                                        <i class="fas fa-user-circle fa-3x text-muted"></i>
                                    </div>
                                    <div class="u-text">
                                        <h4><?php echo e($loggedInStudent->name); ?></h4>
                                        <p class="text-muted"><?php echo e($loggedInStudent->name); ?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">My Profile</a>

                                <form action="<?php echo e(route('siswa.logout')); ?>" method="POST" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="dropdown-item text-dark">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/admin/menu/main.blade.php ENDPATH**/ ?>