<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
        <div class="row gy-3">
            <div class="col-6 text-center">
                <div class="count-box premium-card">
                    <i class="bi bi-person gradient-icon"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo e($newStudentsCount); ?>"
                            data-purecounter-duration="1" class="purecounter premium-counter"></span>
                        <p class="premium-text">Data Masuk Siswa Baru</p>
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="count-box premium-card">
                    <i class="bi bi-journal-richtext gradient-icon" style="color: #ee6c20;"></i>
                    <div>
                        <span id="totalSiswa" data-purecounter-start="0" data-purecounter-end="<?php echo e($totalSiswa); ?>"
                            data-purecounter-duration="1" class="purecounter premium-counter"></span>
                        <p class="premium-text">Data Seluruh Siswa</p>
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="count-box premium-card">
                    <i class="bi bi-person-badge gradient-icon" style="color: #15be56;"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo e($jumlahGuru); ?>"
                            data-purecounter-duration="1" class="purecounter premium-counter"></span>
                        <p class="premium-text">Data Jumlah Guru</p>
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="count-box premium-card">
                    <i class="bi bi-people gradient-icon" style="color: #bb0852;"></i>
                    <div>
                        <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                            class="purecounter premium-counter"></span>
                        <p class="premium-text">Data Jumlah Kelas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Premium Styling for Counts Section */
    /* .counts {
        padding: 40px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    } */

    .section-title h2 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
    }

    .title-line {
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, #4361ee, #bb0852);
        margin: 0 auto 20px;
    }

    .premium-card {
        background: white;
        border-radius: 12px;
        padding: 20px 15px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border: none;
        height: 100%;
        margin-bottom: 15px;
    }

    .premium-card:hover,
    .premium-card:active {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
    }

    .premium-card::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 3px;
        bottom: 0;
        left: 0;
        background: linear-gradient(90deg, #4361ee, #bb0852);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .premium-card:hover::before,
    .premium-card:active::before {
        transform: scaleX(1);
    }

    .gradient-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        font-size: 20px;
        margin-bottom: 10px;
        color: white !important;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .bi-person {
        background: linear-gradient(135deg, #4361ee, #3a56d4);
    }

    .bi-journal-richtext {
        background: linear-gradient(135deg, #ee6c20, #e35b0e) !important;
    }

    .bi-person-badge {
        background: linear-gradient(135deg, #15be56, #0ca648) !important;
    }

    .bi-people {
        background: linear-gradient(135deg, #bb0852, #a00545) !important;
    }

    .premium-card:hover .gradient-icon,
    .premium-card:active .gradient-icon {
        transform: scale(1.1);
    }

    .premium-counter {
        font-size: 1.8rem;
        font-weight: 700;
        margin: 5px 0;
        background: linear-gradient(45deg, #333 30%, #777 70%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: block;
    }

    .premium-text {
        font-size: 0.85rem;
        font-weight: 500;
        color: #6c757d;
        margin-top: 5px;
        line-height: 1.2;
    }

    /* Landscape Responsive View */
    @media (orientation: landscape) and (max-width: 850px) {
        .premium-card {
            padding: 15px 10px;
        }

        .gradient-icon {
            width: 45px;
            height: 45px;
            font-size: 18px;
        }

        .premium-counter {
            font-size: 1.6rem;
        }

        .premium-text {
            font-size: 0.8rem;
        }
    }

    /* For very small screens */
    @media (max-width: 350px) {
        .premium-counter {
            font-size: 1.5rem;
        }

        .premium-text {
            font-size: 0.75rem;
        }

        .gradient-icon {
            width: 40px;
            height: 40px;
            font-size: 16px;
        }
    }

    .premium-card::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(to bottom right,
                rgba(255, 255, 255, 0.3) 0%,
                rgba(255, 255, 255, 0) 40%,
                rgba(255, 255, 255, 0) 100%);
        transform: rotate(30deg);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .premium-card:hover::after,
    .premium-card:active::after {
        opacity: 1;
    }

    @media (hover: none) {
        .premium-card:active {
            transform: translateY(-5px);
        }

        .premium-card:active .gradient-icon {
            transform: scale(1.1);
        }

        .premium-card:active::before {
            transform: scaleX(1);
        }

        .premium-card:active::after {
            opacity: 1;
        }
    }
</style>


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
                            <img src="<?php echo e(asset('storage/' . $item->image_path)); ?>" class="android-image"
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
            width: 100%;
            max-width: 370px;
            height: auto;
            /* aspect-ratio: 2/3; */
            background-color: #333;
            border-radius: 25px;
            padding: 15px;
            position: relative;
            margin: 0 auto;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.4);
        }

        @media (max-width: 768px) {
            .android-mockup {
                padding: 10px;
                max-width: 90%;
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

        .android-image {
            width: 100%;
            height: auto;
            max-height: 100%;
            object-fit: cover;
            border-radius: 8px;
            display: block;
        }
    </style>






    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>
                    <span style="color: #FF9F00;">Alur Pendaftaran</span>
                    <span style="color: #3A6B56;"> MA NU Luthful Ulum</span>
                </p>
            </header>

            <style>
                .section-header p {
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

                .steps-container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 20px;
                    max-width: 100%;
                    overflow-x: hidden;
                    box-sizing: border-box;
                    padding: 10px;
                }

                .step-card {
                    flex: 1 1 250px;
                    max-width: 100%;
                }

                .step-box {
                    background: white;
                    border-radius: 12px;
                    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
                    padding: 25px;
                    width: calc(50% - 10px);
                    display: flex;
                    align-items: center;
                    transition: all 0.3s ease;
                    position: relative;
                    overflow: hidden;
                }



                .step-box:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 12px 30px rgba(31, 68, 244, 0.1);
                }

                .step-box::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 0;
                    height: 100%;
                    width: 4px;
                    background: linear-gradient(180deg, #28a745, #c8f65c);
                }

                .step-icon {
                    width: 45px;
                    height: 45px;
                    min-width: 45px;
                    background: linear-gradient(135deg, #28a745, #c8f65c);
                    border-radius: 10px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-right: 20px;
                    color: white;
                    font-size: 20px;
                }

                .step-content h3 {
                    font-size: 18px;
                    font-weight: 600;
                    color: #2d3748;
                    margin-bottom: 5px;
                }

                @media (max-width: 768px) {
                    .step-box {
                        width: 100%;
                    }
                }
            </style>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 mt-5 mt-lg-0 d-flex justify-content-center">
                        <div class="steps-container">
                            <div class="step-box" data-aos="zoom-out" data-aos-delay="200">
                                <div class="step-icon">
                                    <i class="bi bi-check"></i>
                                </div>
                                <div class="step-content">
                                    <h3>1. Pendaftaran Online</h3>
                                </div>
                            </div>
                            <div class="step-box" data-aos="zoom-out" data-aos-delay="300">
                                <div class="step-icon">
                                    <i class="bi bi-check"></i>
                                </div>
                                <div class="step-content">
                                    <h3>2. Mengisi Formulir</h3>
                                </div>
                            </div>
                            <div class="step-box" data-aos="zoom-out" data-aos-delay="400">
                                <div class="step-icon">
                                    <i class="bi bi-check"></i>
                                </div>
                                <div class="step-content">
                                    <h3>3. Melengkapi Dokumen</h3>
                                </div>
                            </div>
                            <div class="step-box" data-aos="zoom-out" data-aos-delay="400">
                                <div class="step-icon">
                                    <i class="bi bi-check"></i>
                                </div>
                                <div class="step-content">
                                    <h3>4. Verifikasi Data</h3>
                                </div>
                            </div>
                            <div class="step-box" data-aos="zoom-out" data-aos-delay="400">
                                <div class="step-icon">
                                    <i class="bi bi-check"></i>
                                </div>
                                <div class="step-content">
                                    <h3>5. Mengikuti Test Soal</h3>
                                </div>
                            </div>
                            <div class="step-box" data-aos="zoom-out" data-aos-delay="500">
                                <div class="step-icon">
                                    <i class="bi bi-check"></i>
                                </div>
                                <div class="step-content">
                                    <h3>6. Pengumuman</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    





    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>
                    <span style="color: #FF9F00;">Keunggulan</span>
                    <span style="color: #3A6B56;">MA NU Luthful Ulum</span>
                </p>
            </header>


            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Pendidikan Berkualitas</h3>
                        <p class="feature-description">Kurikulum terintegrasi dengan standar nasional dan nilai-nilai
                            keagamaan.</p>
                    </div>
                    <div class="feature-wave"></div>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Lingkungan Kondusif</h3>
                        <p class="feature-description">Komunitas inklusif yang mendukung pengembangan potensi siswa.
                        </p>
                    </div>
                    <div class="feature-wave"></div>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="feature-title">Pengajar Profesional</h3>
                        <p class="feature-description">Tenaga pendidik berpengalaman dan berkualifikasi tinggi.</p>
                    </div>
                    <div class="feature-wave"></div>
                </div>
            </div>

            <style>
                .features-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 30px;
                    padding: 40px;
                    max-width: 1200px;
                    margin: 0 auto;
                }

                .feature-card {
                    position: relative;
                    background: white;
                    border-radius: 15px;
                    /* padding: 30px; */
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    overflow: hidden;
                }

                .feature-card:hover {
                    transform: translateY(-10px);
                    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
                }

                .feature-icon {
                    font-size: 2.5rem;
                    color: #28a745;
                    margin-bottom: 20px;
                }

                .feature-content {
                    position: relative;
                    z-index: 2;
                }

                .feature-title {
                    font-size: 1.5rem;
                    color: #333;
                    margin-bottom: 15px;
                    font-weight: 600;
                }

                .feature-description {
                    color: #666;
                    line-height: 1.6;
                    font-size: 1rem;
                }

                .feature-wave {
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 10px;
                    background: linear-gradient(90deg, #4ec856, #8ffbaf);
                    transition: height 0.3s ease;
                }

                .feature-card:hover .feature-wave {
                    height: 15px;
                }

                @media (max-width: 768px) {
                    .features-grid {
                        grid-template-columns: 1fr;
                        padding: 20px;
                    }
                }
            </style>

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




    <!-- ======= Galery ======= -->
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