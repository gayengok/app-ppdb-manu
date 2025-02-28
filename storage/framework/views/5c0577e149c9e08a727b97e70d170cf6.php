

<?php $__env->startSection('content'); ?>
    <section class="news-article-section py-8 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h2 class="text-center mb-5"
                        style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #3A6B56; margin-top: 30px; text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); letter-spacing: 1px; font-size: 28px;">
                        <span style="color: #FF9F00;">Visi</span> dan Misi MA NU Luthful Ulum
                    </h2>

                    <div class="divider my-4"></div>

                    <h3 class="my-3" style="color: #3A6B56; font-weight: bold;">Visi</h3>
                    <p class="text-justify">
                        TERWUJUDNYA MADRASAH UNGGUL, BERPRESTASI, TERAMPIL DAN BERAKHLAK MULIA
                    </p>

                    <h3 class="my-3" style="color: #FF9F00; font-weight: bold;">Misi</h3>
                    <ul class="custom-list">
                        <li>
                            <i class="fas fa-check-circle text-success me-2"></i>1. Menyelenggarakan pendidikan dan
                            pengajaran secara kontekstual, aktif, kreatif, efektif dan berkualitas untuk mencapai prestasi
                            akademik dan non akademik sehingga peserta didik mampu berkembang secara optimal sesuai dengan
                            potensi yang ada pada dirinya yang dilakukan dengan religius, jujur, dan disiplin;
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success me-2"></i>2. Mewujudkan pembelajaran dan pembiasaan
                            dalam mempelajari ilmu agama, ilmu pengetahuan dan teknologi dengan menciptakan lingkungan yang
                            Islami di madrasah yang dilakukan dengan penuh toleransi, disiplin, jujur, adil dan menjunjung
                            tinggi nilai nilai etika serta sopan santun dalam kehidupan sehari-hari;
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success me-2"></i>3. Menyelenggarakan pembinaan, pengembangan
                            diri, dan pelatihan keterampilan untuk menumbuh kembangkan minat, bakat, dan keterampilan
                            peserta didik yang dilakukan dengan sifat religius, jujur, peduli, dan disiplin;
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success me-2"></i>4. Menumbuhkembangkan akhlakul karimah pada
                            seluruh warga madrasah yang dilakukan dengan sifat religius, jujur, peduli, dan disiplin.
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<style>
    .custom-title {
        font-size: 2rem;
        position: relative;
    }

    .custom-title::after {
        content: "";
        display: block;
        width: 10%;
        height: 2px;
        background: #fbbc05;
        margin: 0.5rem auto 0;
    }

    @media (max-width: 768px) {
        .custom-title::after {
            width: 50%;
        }
    }


    .py-8 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important;
    }


    .custom-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .custom-list li {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
        padding: 5px 0;
    }

    .custom-list li i {
        margin-right: 10px;
    }
</style>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/profil/visi-misi.blade.php ENDPATH**/ ?>