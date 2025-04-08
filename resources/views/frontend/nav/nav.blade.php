<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('frontend/assets/img/Logo-MA.png') }}" alt="">
            <span>MA NU LUTHFUL ULUM</span>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link {{ request()->routeIs('pages.home') ? 'active' : '' }}"
                        href="{{ route('pages.home') }}">Home</a></li>
                <li><a class="nav-link {{ request()->routeIs('news.blog') ? 'active' : '' }}"
                        href="{{ route('news.blog') }}">Berita</a></li>

                <li>
                    <a class="nav-link {{ request()->routeIs('ppdb.siswa') ? 'active' : '' }}"
                        href="{{ route('ppdb.siswa') }}">
                        PPDB
                    </a>
                </li>

                <li class="dropdown">
                    <a class="{{ request()->routeIs('galery.foto', 'galery.video') ? 'active' : '' }}" href="#">
                        <span>Gallery</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->routeIs('galery.foto') ? 'active' : '' }}"
                                href="{{ route('galery.foto') }}">
                                Photo
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('galery.video') ? 'active' : '' }}"
                                href="{{ route('galery.video') }}">
                                Video
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a class="{{ request()->routeIs('profil.sejarah') || request()->routeIs('profil.visi-misi') ? 'active' : '' }}"
                        href="#">
                        <span>Profil</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ request()->routeIs('profil.sejarah') ? 'active' : '' }}"
                                href="{{ route('profil.sejarah') }}">
                                Sejarah
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('profil.visi-misi') ? 'active' : '' }}"
                                href="{{ route('profil.visi-misi') }}">
                                Visi-Misi
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}"
                        href="{{ route('contact.index') }}">
                        Contact
                    </a>
                </li>

                <li class="d-lg-none">
                    <button class="search-toggle btn w-100 text-start px-3 py-3 d-flex align-items-center rounded-3">
                        <div class="d-flex align-items-center w-100">
                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle"
                                style="width: 36px; height: 36px; background-color: rgba(255, 255, 255, 0.15);">
                                <i class="bi bi-search" style="font-size: 16px; color: #fff;"></i>
                            </div>
                            <span class="flex-grow-1 fw-semibold" style="font-size: 16px; color: #fff;">Cari
                                Sesuatu...</span>
                        </div>
                    </button>
                </li>

            </ul>
        </nav>

        <div class="d-flex align-items-center">
            <div class="search-icon-container d-none d-lg-flex">
                <button class="search-toggle" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
            <button class="mobile-nav-toggle d-lg-none">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </div>

    <div class="search-overlay">
        <div class="search-container">
            <div class="search-header d-flex justify-content-between align-items-center">
                <h4>Pencarian</h4>
                <button class="search-close">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            <form class="search-form" action="{{ route('search') }}" method="GET">
                <div class="search-input-group">
                    <input type="search" name="query" placeholder="Cari sesuatu..." aria-label="Search">
                    <button type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</header>

<style>
    /* Base header styles */
    .header {
        background: linear-gradient(135deg, #28a745, #218838);
        padding: 15px 0;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
        z-index: 1030;
    }

    .header .logo {
        text-decoration: none;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .header .logo img {
        max-height: 50px;
        margin-right: 15px;
        filter: drop-shadow(0 2px 3px rgba(0, 0, 0, 0.2));
        transition: transform 0.3s ease;
    }

    .header .logo:hover img {
        transform: scale(1.05);
    }

    .header .logo span {
        font-size: 22px;
        font-weight: 800;
        color: #fbbc05;
        font-family: 'Montserrat', sans-serif;
        letter-spacing: 0.5px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    }


    /* Navigation*/
    .navbar {
        padding: 0;
    }

    .navbar ul {
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
        align-items: center;
        gap: 5px;
    }

    .navbar li {
        position: relative;
    }

    .navbar a,
    .navbar .nav-link {
        display: flex;
        align-items: center;
        padding: 10px 16px;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 500;
        white-space: nowrap;
        transition: all 0.3s ease;
        border-radius: 6px;
        position: relative;
        color: #fff;
    }

    .navbar a:hover,
    .navbar .active {
        background: rgba(255, 255, 255, 0.15);
        color: #ffd700;
        transform: translateY(-2px);
    }

    .navbar a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        background: #ffd700;
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
        transition: width 0.3s ease;
    }

    .navbar a:hover::after,
    .navbar .active::after {
        width: 70%;
    }







    .navbar .dropdown ul a i {
        margin-right: 12px;
        font-size: 16px;
        color: #28a745;
        transition: all 0.3s ease;
    }

    .navbar .dropdown ul a:hover {
        background-color: rgba(40, 167, 69, 0.08);
        color: #28a745;
        padding-left: 25px;
        transform: none;
    }

    .navbar .dropdown ul a:hover i {
        color: #ffd700;
    }

    /* Search Styling - REVISED */
    .search-icon-container {
        margin-left: 20px;
    }

    .search-toggle {
        background: transparent;
        border: none;
        color: #fff;
        font-size: 20px;
        padding: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        width: 40px;
        height: 40px;
    }

    .search-toggle i {
        transition: transform 0.2s ease-in-out;
    }

    .search-toggle:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: scale(1.1);
    }

    /* Improved Search Overlay */
    .search-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(33, 136, 56, 0.97);
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s ease;
        backdrop-filter: blur(5px);
    }

    .search-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .search-container {
        width: 90%;
        max-width: 600px;
        padding: 0 20px;
    }

    .search-header {
        margin-bottom: 30px;
    }

    .search-header h4 {
        color: #fff;
        font-size: 24px;
        font-weight: 600;
        margin: 0;
    }

    .search-close {
        background: transparent;
        border: none;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
        transition: all 0.3s ease;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-close:hover {
        transform: rotate(90deg);
    }

    .search-input-group {
        display: flex;
        border-bottom: 2px solid rgba(255, 255, 255, 0.3);
        padding: 5px 0;
        transition: all 0.3s ease;
    }

    .search-input-group:focus-within {
        border-color: #ffd700;
    }

    .search-input-group input {
        background: transparent;
        border: none;
        color: #fff;
        font-size: 18px;
        padding: 12px 0;
        width: 100%;
        outline: none;
        height: 50px;
    }

    .search-input-group input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .search-input-group button {
        background: transparent;
        border: none;
        color: #fff;
        font-size: 20px;
        padding: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .search-input-group button:hover {
        color: #ffd700;
    }

    /* Mobile Navigation Button */
    .mobile-nav-toggle {
        color: #fff;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        font-size: 26px;
        cursor: pointer;
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .mobile-nav-toggle:hover {
        background: rgba(255, 255, 255, 0.2);
    }

    /* Mobile Navigation Styles */
    @media (max-width: 991px) {
        .navbar {
            position: fixed;
            top: 0;
            right: -300px;
            width: 280px;
            height: 100vh;
            background: rgba(40, 167, 69, 0.98);
            backdrop-filter: blur(10px);
            padding: 100px 20px 30px;
            overflow-y: auto;
            transition: all 0.5s ease;
            z-index: 1029;
            box-shadow: -10px 0 30px rgba(0, 0, 0, 0.15);
            border-radius: 20px 0 0 20px;
        }

        .navbar.mobile-active {
            right: 0;
        }

        .navbar ul {
            flex-direction: column;
            gap: 10px;
            width: 100%;
        }

        .navbar li {
            width: 100%;
        }

        .navbar a,
        .navbar .nav-link {
            padding: 12px 15px;
            width: 100%;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(5px);
            justify-content: space-between;
        }

        .navbar a::after {
            display: none;
        }

        .navbar a:hover,
        .navbar .active {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(0);
        }

        /* Improved Mobile Search Button */
        .search-toggle.btn {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 10px;
            margin-top: 10px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: all 0.3s ease;
        }

        .search-toggle.btn:hover {
            background: rgba(255, 255, 255, 0.15);
        }

        .search-toggle.btn:active,
        .search-toggle.btn:focus {
            box-shadow: none;
            outline: none;
        }

        /* Mobile Search Overlay */
        .search-container {
            width: 90%;
            max-width: 500px;
            padding: 20px;
        }

        .search-input-group input {
            font-size: 16px;
            height: 50px;
        }

        .search-header h4 {
            font-size: 20px;
        }

        /* Mobile Dropdown */
        .navbar .dropdown ul {
            position: static;
            transform: none;
            opacity: 1;
            visibility: visible;
            background: transparent;
            box-shadow: none;
            display: none;
            padding: 5px 0;
            border-radius: 0;
            width: 100%;
        }

        .navbar .dropdown ul::before {
            display: none;
        }

        .navbar .dropdown.show>ul {
            display: block;
            animation: fadeIn 0.4s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .navbar .dropdown ul a {
            padding: 12px 20px;
            border-radius: 8px;
            margin: 5px 0;
            border: 1px solid rgba(255, 255, 255, 0.05);
            color: #fff;
        }

        .navbar .dropdown ul a:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #ffd700;
        }

        .navbar .dropdown>a i {
            transition: transform 0.3s ease;
        }

        .navbar .dropdown.show>a i {
            transform: rotate(180deg);
        }

        .mobile-nav-toggle.active {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1030;
            background: rgba(255, 255, 255, 0.15);
        }

        .mobile-nav-toggle.active i:before {
            content: "\f00d";
        }
    }


    /* Mobile Navigation Styles - Updated */
    @media (max-width: 991px) {

        .navbar a,
        .navbar .nav-link {
            color: #2b2727db !important;
            display: flex;
            align-items: center;
            padding: 12px 15px;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 500;
            white-space: nowrap;
            transition: all 0.3s ease;
            border-radius: 10px;
            position: relative;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(5px);
            justify-content: space-between;
        }

        .navbar a:hover,
        .navbar .active {
            background: rgba(255, 255, 255, 0.15);
            color: #ffd700 !important;
            transform: translateY(0);
        }

        /* Dropdown menu items */
        .navbar .dropdown ul a {
            padding: 12px 20px;
            border-radius: 8px;
            margin: 5px 0;
            border: 1px solid rgba(255, 255, 255, 0.05);
            color: #000 !important;

        }

        /* Dropdown hover states */
        .navbar .dropdown ul a:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #000 !important;

        }


        .navbar .search-toggle.btn span {
            color: #2b2727db !important;

        }


        .navbar .search-toggle.btn i {
            color: #000 !important;

        }

        .navbar .dropdown>a i {
            color: #000 !important;

        }
    }


    @media (max-width: 991px) {

        .navbar a,
        .navbar .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: 500;
            white-space: nowrap;
            transition: all 0.3s ease;
            border-radius: 10px;
            position: relative;
            color: #000;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(5px);
            justify-content: space-between;
        }

        /* Also update dropdown items color */
        .navbar .dropdown ul a {
            padding: 12px 20px;
            border-radius: 8px;
            margin: 5px 0;
            border: 1px solid rgba(255, 255, 255, 0.05);
            color: #000;
        }

        .navbar .search-toggle.btn span {
            color: #000;
        }

        .navbar .search-toggle.btn i {
            color: #000;
        }
    }

    @media (max-width: 768px) {
        .header .logo span {
            font-size: 18px;
        }

        .header .logo img {
            max-height: 40px;
        }
    }

    @media (max-width: 576px) {
        .header .logo span {
            font-size: 16px;
        }

        .header .logo img {
            max-height: 35px;
            margin-right: 10px;
        }

        .search-container {
            width: 95%;
        }
    }

    /*Gallery dropdown */
    .navbar li.dropdown ul li a:hover {
        color: #2b2727db !important;
    }

    @media (max-width: 991px) {
        .navbar .dropdown ul li a:hover {
            color: #2b2727db !important;
        }

        .navbar .dropdown ul li a.active {
            color: #2b2727db !important;
        }

    }

    /* Overflow fix */
    html.nav-open,
    body.nav-open {
        overflow: hidden;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        const navbar = document.querySelector('#navbar');
        const searchToggle = document.querySelectorAll('.search-toggle');
        const searchClose = document.querySelector('.search-close');
        const searchOverlay = document.querySelector('.search-overlay');
        const html = document.querySelector('html');
        const body = document.querySelector('body');
        const dropdowns = document.querySelectorAll('.navbar .dropdown > a');

        if (mobileNavToggle) {
            mobileNavToggle.addEventListener('click', function() {
                navbar.classList.toggle('mobile-active');
                this.classList.toggle('active');
                html.classList.toggle('nav-open');
                body.classList.toggle('nav-open');
            });
        }

        dropdowns.forEach(function(dropdown) {
            dropdown.addEventListener('click', function(e) {
                if (window.innerWidth < 992) {
                    e.preventDefault();
                    this.parentNode.classList.toggle('show');
                }
            });
        });

        if (searchToggle.length > 0 && searchOverlay) {
            searchToggle.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    searchOverlay.classList.add('active');

                    setTimeout(function() {
                        const searchInput = searchOverlay.querySelector('input');
                        if (searchInput) searchInput.focus();
                    }, 100);
                });
            });
        }

        if (searchClose && searchOverlay) {
            searchClose.addEventListener('click', function() {
                searchOverlay.classList.remove('active');
            });
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && searchOverlay.classList.contains('active')) {
                searchOverlay.classList.remove('active');
            }
        });

        searchOverlay.addEventListener('click', function(e) {
            if (!e.target.closest('.search-container') &&
                !e.target.closest('.search-toggle')) {
                searchOverlay.classList.remove('active');
            }
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth >= 992 && navbar.classList.contains('mobile-active')) {
                navbar.classList.remove('mobile-active');
                mobileNavToggle.classList.remove('active');
                html.classList.remove('nav-open');
                body.classList.remove('nav-open');
            }
        });

        document.addEventListener('click', function(e) {
            if (navbar.classList.contains('mobile-active') &&
                !navbar.contains(e.target) &&
                !mobileNavToggle.contains(e.target)) {
                navbar.classList.remove('mobile-active');
                mobileNavToggle.classList.remove('active');
                html.classList.remove('nav-open');
                body.classList.remove('nav-open');
            }
        });
    });
</script>
