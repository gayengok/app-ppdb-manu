<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6 ms-auto text-center">
                <div class="count-box">
                    <i class="bi bi-person"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo e($newStudentsCount); ?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Data Masuk Siswa Baru</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="count-box">
                    <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                    <div>
                        <span id="totalSiswa" data-purecounter-start="0" data-purecounter-end="<?php echo e($totalSiswa); ?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Data Seluruh Siswa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="count-box">
                    <i class="bi bi-person-badge" style="color: #15be56;"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo e($jumlahGuru); ?>"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Data Guru</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 me-auto text-center">
                <div class="count-box">
                    <i class="bi bi-people" style="color: #bb0852;"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Jumlah Kelas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<header class="berita-terkini">
    <p>
        <span style="color: #FF9F00;">Berita</span>
        <span style="color: #3A6B56;">Terkini</span>
    </p>
</header>

<div class="py-5">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Blog Card -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="<?php echo e(asset('storage/' . $artikel->image)); ?>" class="card-img-top img-fluid"
                            alt="Berita 1" style="height: 250px; object-fit: cover;">

                        <div class="card-body">
                            <a href="<?php echo e(route('article.show', $artikel->id)); ?>"
                                style="color: black; text-decoration: none;">
                                <p class="card-date" style="font-size: 12px; color: #6c757d;">
                                    <?php echo e(\Carbon\Carbon::parse($artikel->published_date)->format('d M Y')); ?>

                                </p>
                                <h5 class="card-title"
                                    style="font-weight: 500; font-size: 16px; font-family: 'Poppins', sans-serif;">
                                    <?php echo e($artikel->title); ?>

                                </h5>
                                <p class="card-text" style="font-size: 12px;"><?php echo e($artikel->short_description); ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>


<main id="main">
    <!-- ======= Pendaftaran======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
                <div class="android-mockup">
                    <?php $__empty_1 = true; $__currentLoopData = $uploadpendaftarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="android-screen">
                            <img src="<?php echo e(asset('storage/' . $item->image_path)); ?>" class="img-fluid"
                                alt="Gambar dalam HP Android">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="text-center"></p>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>MA NU LUTHFUL ULUM</h3>
                        <h2>Pembukaan masa pendaftaran online, Ayo segera daftarkan
                            diri anda dan pastikan anda mendapatkan pendidikan yang unggul dan berkualitas disini.
                        </h2>
                        <p>
                        </p>
                        <div class="text-center text-lg-start mt-4">
                            <a href="<?php echo e(route('login_siswa')); ?>"
                                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center"
                                style="background-color: green; color: white;">
                                <span>Daftar Sekarang</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .android-mockup {
            width: 400px;
            height: 600px;
            background-color: #333;
            border-radius: 25px;
            padding: 15px;
            position: relative;

            margin-left: 150px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.4);
        }

        @media (max-width: 768px) {
            .android-mockup {
                padding: 7px;
                width: 300px;
                height: 490px;
                margin-left: 30px;
                transform: translateY(-50px);
            }
        }

        .android-screen {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            overflow: hidden;
            background-color: #fff;
        }

        .android-mockup::before {
            content: "";
            width: 50px;
            height: 5px;
            background: #999;
            border-radius: 5px;
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .android-mockup::after {
            content: "";
            width: 40px;
            height: 40px;
            border-radius: 50%;
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
        }

        .photo-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>






    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>
                    <span style="color: #FF9F00;">Alur Pendaftaran</span>
                    <span style="color: #3A6B56;">MA NU Luthful Ulum</span>
                </p>
            </header>

            <style>
                <style>.section-header p {
                    font-family: 'Montserrat', sans-serif;
                    font-weight: 600;
                    color: #3A6B56;
                    margin-top: 30px;
                    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
                    letter-spacing: 1px;
                    font-size: 38px;
                }

                @media (max-width: 768px) {
                    .section-header p {
                        font-size: 28px;
                        margin-top: 20px;
                    }
                }

                @media (max-width: 480px) {
                    .section-header p {
                        font-size: 24px;
                        margin-top: 15px;
                    }
                }
            </style>
            </style>
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-5 mt-lg-0 d-flex justify-content-center">
                    <div class="row align-self-center gy-4">
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>1. Pendaftaran Online atau Offline</h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>2. Mengisi Formulir</h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>3. Melengkapi Dokument</h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>4. Pengumuman</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <!-- ======= Jadwal Pendaftaran Sekolah ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>
                    <span style="color: #FF9F00;">Jadwal Pendaftaran</span>
                    <span style="color: #3A6B56;">MA NU Luthful Ulum</span>
                </p>
            </header>

            <div class="row gy-4">
                <!-- Jadwal Pembukaan Pendaftaran -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="ri-calendar-line icon"></i>
                        <h3>Pembukaan Pendaftaran</h3>
                        <?php $__empty_1 = true; $__currentLoopData = $uploadpendaftarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <p><?php echo e($item->deskripsi); ?></p>
                            <a href="#" class="read-more">
                                <span>Detail Pendaftaran</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p class="text-center">Belum ada informasi pembukaan pendaftaran.</p>
                        <?php endif; ?>
                    </div>
                </div>


                <!-- Syarat Pendaftaran -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box orange">
                        <i class="ri-file-list-line icon"></i>
                        <h3>Syarat Pendaftaran</h3>
                        <p>Calon siswa wajib menyerahkan fotokopi KK, Akta Kelahiran, Kartu KIP/PKH (jika ada), KTP
                            orang tua, dan Ijazah/SKL.
                        </p>
                        <a href="#" class="read-more"><span>Lihat Syarat Lengkap</span> <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>



                <!-- Pengumuman Kelulusan -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box pink">
                        <i class="ri-notification-3-line icon"></i>
                        <h3>Pengumuman Kelulusan</h3>
                        <?php $__empty_1 = true; $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <p><?php echo e(Str::limit($item->deskripsi, 200)); ?></p>
                            <a href="<?php echo e(route('pengumuman.siswa')); ?>" class="read-more">
                                <span>Lihat Pengumuman</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p class="text-center">Belum ada informasi pengumuman kelulusan pendaftaran.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </section>





    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>
                    <span style="color: #FF9F00;">Keunggulan Sekolah</span>
                    <span style="color: #3A6B56;">MA NU Luthful Ulum</span>
                </p>
            </header>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="box text-center">
                        <img src="<?php echo e(asset('frontend/assets/img/unggul-1.png')); ?>" class="img-fluid"
                            alt="Lingkungan Islami">
                        <h3>Lingkungan Islami dan Berkarakter</h3>
                        <p>MA NU Luthful Ulum menciptakan lingkungan yang Islami dengan menanamkan nilai-nilai keislaman
                            dan akhlak mulia kepada seluruh siswa, sehingga menghasilkan generasi berkarakter kuat.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box text-center">
                        <img src="<?php echo e(asset('frontend/assets/img/unggul-2.png')); ?>" class="img-fluid"
                            alt="Fasilitas Modern">
                        <h3>Fasilitas Lengkap dan Modern</h3>
                        <p>Dilengkapi dengan laboratorium komputer, perpustakaan digital, dan ruang belajar multimedia,
                            MA NU Luthful Ulum mendukung proses pembelajaran yang interaktif dan inovatif.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="box text-center">
                        <img src="<?php echo e(asset('frontend/assets/img/unggul-3.png')); ?>" class="img-fluid"
                            alt="Program Unggulan">
                        <h3>Program Unggulan dan Prestasi</h3>
                        <p>Memiliki program unggulan seperti tahfidz Al-Qur'an, kelas olimpiade, dan ekstrakurikuler
                            yang beragam, MA NU Luthful Ulum telah mencetak banyak prestasi di tingkat lokal maupun
                            nasional.</p>
                    </div>
                </div>
            </div>


        </div>

        <style>
            .box img {
                width: 100%;
                height: auto;
                margin-bottom: 20px;
            }

            /* Menambahkan sedikit jarak antara gambar dan teks */
            .box h3 {
                font-size: 1.5rem;
                margin-bottom: 10px;
            }

            /* Menjaga teks tetap teratur dan responsif */
            .box p {
                font-size: 1rem;
                line-height: 1.5;
            }

            /* Memastikan semua box berada dalam posisi tengah */
            .text-center {
                text-align: center;
            }

            /* Responsif pada perangkat mobile */
            @media (max-width: 768px) {
                .box {
                    margin-bottom: 30px;
                }
            }
        </style>


    </section><!-- End Values Section -->




    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>
                    <span style="color: #FF9F00;">Galery Sekolah</span>
                    <span style="color: #3A6B56;">MA NU Luthful Ulum</span>
                </p>
            </header>

            <div class="row">
                <!-- Gambar 1 -->
                <?php $__empty_1 = true; $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card shadow border-0 hover-shadow h-100">
                            <img src="<?php echo e(asset('storage/' . $photo->photo_path)); ?>" class="card-img-top photo-image"
                                alt="<?php echo e($photo->title ?? 'Photo'); ?>">
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-12 text-center">
                        <p>No photos available at the moment.</p>
                    </div>
                <?php endif; ?>

                <!-- Gambar 2 -->
            </div>

        </div>

    </section>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>
                    <span style="color: #3A6B56;">Quotes</span>
                </p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “Siapa yang mau mengurusi NU, saya anggap ia santriku. Siapa yang jadi santriku, saya
                                doakan husnul khotimah beserta anak cucunya.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="public/frontend/assets/img/testimonials/testimonials-1.jpg"
                                    class="testimonial-img" alt="">
                                <h3>KH.HASYIM ASY'ARI</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “Agama Dan Nasionalisme Adalah Dua Kutub Yang Tidak Berseberangan. Nasionalisme Adalah
                                Bagian Dari Agama Dan Keduanya Saling Menguatkan.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="public/frontend/assets/img/testimonials/testimonials-2.jpg"
                                    class="testimonial-img" alt="">
                                <h3>KH.HASYIM ASY'ARI</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Dengan ilmu dan akhlak, santri membangun masa depan yang lebih baik.
                            </p>
                            <div class="profile mt-auto">
                                <img src="public/frontend/assets/img/testimonials/testimonials-3.jpg"
                                    class="testimonial-img" alt="">
                                <h3>KH.HASYIM ASY'ARI</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “Gunakan masa muda dan umurmu untuk memperoleh ilmu. Jangan mau terpedaya oleh rayuan
                                menunda-nunda dan berangan-angan panjang, sebab setiap detik umur yang terlewatkan dari
                                umur tidak akan tergantikan.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="public/frontend/assets/img/testimonials/testimonials-4.jpg"
                                    class="testimonial-img" alt="">
                                <h3>KH.HASYIM ASY'ARI</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                "Tak ada satu pun di dunia ini yg kekal. Maka, ukirlah cerita indah sebagai kenangan.
                                Karena dunia memang sebuah cerita."
                            </p>
                            <div class="profile mt-auto">
                                <img src="public/frontend/assets/img/testimonials/testimonials-5.jpg"
                                    class="testimonial-img" alt="">
                                <h3>KH.HASYIM ASY'ARI</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>

</main>
<!-- End #main -->
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/pages/section/section.blade.php ENDPATH**/ ?>