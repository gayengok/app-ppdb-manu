<div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
        <ul class="nav nav-secondary">

            <!-- Dashboard -->
            <li class="nav-item <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <!-- Bagian Berita -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base"
                    class="<?php echo e(request()->routeIs('news.berita', 'post.berita') ? 'active' : ''); ?>">
                    <i class="fas fa-pencil-alt"></i>
                    <p>Editorial</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse <?php echo e(request()->routeIs('news.berita', 'post.berita') ? 'show' : ''); ?>"
                    id="base">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="<?php echo e(route('news.berita')); ?>"
                                class="<?php echo e(request()->routeIs('news.berita') ? 'active' : ''); ?>">
                                <i class="fas fa-check-circle"></i>
                                <span class="published">Published</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('post.berita')); ?>"
                                class="<?php echo e(request()->routeIs('post.berita') ? 'active' : ''); ?>">
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
                    class="<?php echo e(request()->routeIs('upload-pendaftaran.index') ? 'active' : ''); ?>">
                    <i class="fas fa-clipboard-list"></i>
                    <p>Pendaftaran</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse <?php echo e(request()->routeIs('upload-pendaftaran.index') ? 'show' : ''); ?>" id="sidebar">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="<?php echo e(route('upload-pendaftaran.index')); ?>"
                                class="<?php echo e(request()->routeIs('upload-pendaftaran.index') ? 'active' : ''); ?>">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="upload">Upload Pendaftaran</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayoutsDataSiswa"
                    class="<?php echo e(request()->routeIs('kelas10.index', 'kelas11.index', 'kelas12.index') ? 'active' : ''); ?>">
                    <i class="fas fa-users"></i>
                    <p>Data Siswa</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse <?php echo e(request()->routeIs('kelas10.index', 'kelas11.index', 'kelas12.index') ? 'show' : ''); ?>"
                    id="sidebarLayoutsDataSiswa">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="<?php echo e(route('kelas-10.index')); ?>"
                                class="<?php echo e(request()->routeIs('kelas10.index') ? 'active' : ''); ?>">
                                <i class="fas fa-user-graduate"></i>
                                <span class="absensi">Kelas 10</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('kelas-11.index')); ?>"
                                class="<?php echo e(request()->routeIs('kelas11.index') ? 'active' : ''); ?>">
                                <i class="fas fa-user-graduate"></i>
                                <span class="absensi">Kelas 11</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('kelas-12.index')); ?>"
                                class="<?php echo e(request()->routeIs('kelas12.index') ? 'active' : ''); ?>">
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
                    class="<?php echo e(request()->routeIs('admin.students.index', 'admin.dokumen.index', 'quiz.admin', 'hasil_seleksi.index', 'siswa.index') ? 'active' : ''); ?>">
                    <i class="fas fa-th-list"></i>
                    <p>Data Calon Siswa</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse <?php echo e(request()->routeIs('admin.students.index', 'admin.dokumen.index', 'quiz.admin', 'hasil_seleksi.index', 'siswa.index') ? 'show' : ''); ?>"
                    id="sidebarLayouts">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="<?php echo e(route('siswa.index')); ?>"
                                class="<?php echo e(request()->routeIs('siswa.index') ? 'active' : ''); ?>">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="identitas">Data Akun Siswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin.students.index')); ?>"
                                class="<?php echo e(request()->routeIs('admin.students.index') ? 'active' : ''); ?>">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="identitas">Data Identitas</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('admin.dokumen.index')); ?>"
                                class="<?php echo e(request()->routeIs('admin.dokumen.index') ? 'active' : ''); ?>">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="dokumen">Dokumen Siswa</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('hasil_seleksi.index')); ?>"
                                class="<?php echo e(request()->routeIs('hasil_seleksi.index') ? 'active' : ''); ?>">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="verifikasi">Verifikasi</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('quiz.admin')); ?>"
                                class="<?php echo e(request()->routeIs('quiz.admin') ? 'active' : ''); ?>">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span class="hasil_test">Hasil Test Soal</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Informasi PPDB -->
            <li class="nav-item <?php echo e(request()->routeIs('admin.informasi.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.informasi.index')); ?>">
                    <i class="fas fa-bullhorn"></i>
                    <p>Informasi PPDB</p>
                </a>
            </li>

            <!-- Input Data Guru -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms"
                    class="<?php echo e(request()->routeIs('guru.index') ? 'active' : ''); ?>">
                    <i class="fas fa-pen-square"></i>
                    <p>Guru</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse <?php echo e(request()->routeIs('guru.index') ? 'show' : ''); ?>" id="forms">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="<?php echo e(route('guru.index')); ?>"
                                class="<?php echo e(request()->routeIs('guru.index') ? 'active' : ''); ?>">
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
                    class="<?php echo e(request()->routeIs('maps.googlemaps', 'maps.jsvectormap') ? 'active' : ''); ?>">
                    <i class="fas fa-user"></i>
                    <p>Profil</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse <?php echo e(request()->routeIs('maps.googlemaps', 'maps.jsvectormap') ? 'show' : ''); ?>"
                    id="maps">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="<?php echo e(route('sejarah.index')); ?>"
                                class="<?php echo e(request()->routeIs('maps.googlemaps') ? 'active' : ''); ?>">
                                <span class="sub-item">Sejarah</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>


            <!-- Kumpulan Album dan Video -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#gallery"
                    class="<?php echo e(request()->routeIs('photo.index', 'videos.index') ? 'active' : ''); ?>">
                    <i class="fas fa-image"></i>
                    <p>Gallery</p>
                    <span class="gallery"></span>
                </a>
                <div class="collapse <?php echo e(request()->routeIs('photo.index', 'videos.index') ? 'show' : ''); ?>"
                    id="gallery">
                    <ul class="nav nav-collapse">
                        <li>
                            <a href="<?php echo e(route('photo.index')); ?>"
                                class="<?php echo e(request()->routeIs('photo.index') ? 'active' : ''); ?>">
                                <i class="fas fa-camera-retro"></i>
                                <span class="foto">Foto</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('videos.index')); ?>"
                                class="<?php echo e(request()->routeIs('videos.index') ? 'active' : ''); ?>">
                                <i class="fas fa-video"></i>
                                <span class="video">Video</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



            <!-- Input Data Hasil atau Pengumuman -->
            <li class="nav-item <?php echo e(request()->routeIs('pengumuman.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('pengumuman.index')); ?>">
                    <i class="fas fa-bell"></i>
                    <p>Pengumuman</p>
                </a>
            </li>

            <!-- Pengaturan -->
            <li class="nav-item <?php echo e(request()->routeIs('admin.settings') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('admin.settings')); ?>">
                    <i class="fas fa-cogs"></i>
                    <p>Pengaturan</p>
                </a>
            </li>

        </ul>
    </div>
</div>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/dashboard/menu/nav.blade.php ENDPATH**/ ?>