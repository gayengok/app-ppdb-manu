<div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
        <ul class="nav nav-secondary">

            <!-- Dashboard -->
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <!-- Bagian Berita -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base"
                    class="{{ request()->routeIs('news.berita', 'post.berita') ? 'active' : '' }}">
                    <i class="fas fa-pencil-alt"></i>
                    <p>Editorial</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->routeIs('news.berita', 'post.berita') ? 'show' : '' }}"
                    id="base">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('news.berita') }}"
                                class="{{ request()->routeIs('news.berita') ? 'active' : '' }}">
                                <i class="fas fa-check-circle"></i>
                                <span class="published">Published</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('post.berita') }}"
                                class="{{ request()->routeIs('post.berita') ? 'active' : '' }}">
                                <i class="fas fa-plus-circle"></i>
                                <span class="article">Create Article</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Uplod Brosur Pendaftaran -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebar"
                    class="{{ request()->routeIs('upload-pendaftaran.index') ? 'active' : '' }}">
                    <i class="fas fa-clipboard-list"></i>
                    <p>Pendaftaran</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->routeIs('upload-pendaftaran.index') ? 'show' : '' }}" id="sidebar">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('upload-pendaftaran.index') }}"
                                class="{{ request()->routeIs('upload-pendaftaran.index') ? 'active' : '' }}">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="upload">Upload Pendaftaran</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Data Seluruh Siswa --}}
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayoutsDataSiswa"
                    class="{{ request()->routeIs('kelas10.index', 'kelas11.index', 'kelas12.index') ? 'active' : '' }}">
                    <i class="fas fa-users"></i>
                    <p>Data Siswa</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->routeIs('kelas10.index', 'kelas11.index', 'kelas12.index') ? 'show' : '' }}"
                    id="sidebarLayoutsDataSiswa">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('kelas-10.index') }}"
                                class="{{ request()->routeIs('kelas10.index') ? 'active' : '' }}">
                                <i class="fas fa-user-graduate"></i>
                                <span class="absensi">Kelas 10</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kelas-11.index') }}"
                                class="{{ request()->routeIs('kelas11.index') ? 'active' : '' }}">
                                <i class="fas fa-user-graduate"></i>
                                <span class="absensi">Kelas 11</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kelas-12.index') }}"
                                class="{{ request()->routeIs('kelas12.index') ? 'active' : '' }}">
                                <i class="fas fa-user-graduate"></i>
                                <span class="absensi">Kelas 12</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <!-- Data Masuk Siswa Baru -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts"
                    class="{{ request()->routeIs('admin.students.index', 'admin.dokumen.index', 'hasil_seleksi.index', 'siswa.index') ? 'active' : '' }}">
                    <i class="fas fa-th-list"></i>
                    <p>Data Calon Siswa</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->routeIs('admin.students.index', 'admin.dokumen.index', 'hasil_seleksi.index', 'siswa.index') ? 'show' : '' }}"
                    id="sidebarLayouts">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('siswa.index') }}"
                                class="{{ request()->routeIs('siswa.index') ? 'active' : '' }}">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="absensi">Data Akun Siswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.students.index') }}"
                                class="{{ request()->routeIs('admin.students.index') ? 'active' : '' }}">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="absensi">Data Indentitas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.dokumen.index') }}"
                                class="{{ request()->routeIs('admin.dokumen.index') ? 'active' : '' }}">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="absensi">Data Dokumen</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('hasil_seleksi.index') }}"
                                class="{{ request()->routeIs('hasil_seleksi.index') ? 'active' : '' }}">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="absensi">Verifikasi</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('quiz.admin') }}"
                                class="{{ request()->routeIs('quiz.admin') ? 'active' : '' }}">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="absensi">Hasil Test Soal</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Informasi PPDB-->
            <li class="nav-item {{ request()->routeIs('admin.informasi.index') ? 'active' : '' }}">
                <a href="{{ route('admin.informasi.index') }}">
                    <i class="fas fa-bullhorn"></i>
                    <p>Informasi PPDB</p>
                </a>
            </li>

            <!-- Input Data Guru -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms"
                    class="{{ request()->routeIs('guru.index') ? 'active' : '' }}">
                    <i class="fas fa-pen-square"></i>
                    <p>Guru</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->routeIs('guru.index') ? 'show' : '' }}" id="forms">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('guru.index') }}"
                                class="{{ request()->routeIs('guru.index') ? 'active' : '' }}">
                                <i class="fas fa-chalkboard-teacher me-2"></i>
                                <span class="data-guru">Data Guru</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Input Data Profil MA NU Luthful Ulum -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#maps"
                    class="{{ request()->routeIs('maps.googlemaps', 'maps.jsvectormap') ? 'active' : '' }}">
                    <i class="fas fa-user"></i>
                    <p>Profil</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse {{ request()->routeIs('maps.googlemaps', 'maps.jsvectormap') ? 'show' : '' }}"
                    id="maps">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('sejarah.index') }}"
                                class="{{ request()->routeIs('maps.googlemaps') ? 'active' : '' }}">
                                <span class="sub-item">Sejarah</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="maps/jsvectormap.html"
                                class="{{ request()->routeIs('maps.jsvectormap') ? 'active' : '' }}">
                                <span class="sub-item">Visi Misi</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </li>

            <!-- Kumpulan Album dan Video -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#gallery"
                    class="{{ request()->routeIs('photo.index', 'videos.index') ? 'active' : '' }}">
                    <i class="fas fa-image"></i>
                    <p>Gallery</p>
                    <span class="gallery"></span>
                </a>
                <div class="collapse {{ request()->routeIs('photo.index', 'videos.index') ? 'show' : '' }}"
                    id="gallery">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="{{ route('photo.index') }}"
                                class="{{ request()->routeIs('photo.index') ? 'active' : '' }}">
                                <i class="fas fa-camera-retro"></i>
                                <span class="foto">Foto</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('videos.index') }}"
                                class="{{ request()->routeIs('videos.index') ? 'active' : '' }}">
                                <i class="fas fa-video"></i>
                                <span class="video">Video</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



            <!-- Input Data Hasil atau Pengumuman -->
            <li class="nav-item {{ request()->routeIs('pengumuman.index') ? 'active' : '' }}">
                <a href="{{ route('pengumuman.index') }}">
                    <i class="fas fa-bell"></i>
                    <p>Pengumuman</p>
                </a>
            </li>

            <!-- Pengaturan -->
            <li class="nav-item {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                <a href="{{ route('admin.settings') }}">
                    <i class="fas fa-cogs"></i>
                    <p>Pengaturan</p>
                </a>
            </li>


        </ul>
    </div>
</div>
