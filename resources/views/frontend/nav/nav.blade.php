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
                        href="{{ route('news.blog') }}">Blog</a></li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('galery.foto', 'galery.video') ? 'active' : '' }}"
                        href="#" id="galleryDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Gallery
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="galleryDropdown">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('galery.foto') ? 'active' : '' }}"
                                href="{{ route('galery.foto') }}">
                                <i class="bi bi-images"></i> Galeri Foto
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('galery.video') ? 'active' : '' }}"
                                href="{{ route('galery.video') }}">
                                <i class="bi bi-film"></i> Galeri Video
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link {{ request()->routeIs('pengumuman.siswa') ? 'active' : '' }}"
                        href="{{ route('pengumuman.siswa') }}">
                        Pengumuman
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('profil.sejarah') || request()->routeIs('profil.visi-misi') ? 'active' : '' }}"
                        href="#profil" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('profil.sejarah') ? 'active' : '' }}"
                                href="{{ route('profil.sejarah') }}">
                                Sejarah
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('profil.visi-misi') ? 'active' : '' }}"
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

                <form class="form-inline my-2 my-lg-0 search-form" action="{{ route('search') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control mr-sm-2 search-input" type="search" name="query"
                            placeholder="Cari sesuatu..." aria-label="Search">
                    </div>
                </form>

            </ul>


            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>



<style>
    .carousel-item img {
        transform: translateY(13px);
    }

    .header {
        background-color: #28a745;
    }

    .navbar ul li a {
        font-size: 18px;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #28a745;
        color: #ffd700;
    }

    .btn:hover {
        background-color: #ffd700;
        color: #fff;
        border-color: #ffd700;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #28a745 !important;
        color: #ffd700 !important;
    }

    .dropdown-menu .dropdown-item:hover i {
        color: #ffd700 !important;
    }


    /* Pencarian */

    .search-form {
        margin-left: 30px;
    }

    @media (max-width: 768px) {
        .search-form {
            margin-left: 10px;
            margin-right: 10px;

        }
    }

    .dropdown-item.active,
    .dropdown-item:active {

        background-color: #fff;
    }
</style>
