
<?php $__env->startSection('content'); ?>
    <section class="vision-mission-section py-8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-11">
                    <div class="glass-container position-relative overflow-hidden">
                        <!-- Decorative Elements -->
                        <div class="decoration-circle circle-1"></div>
                        <div class="decoration-circle circle-2"></div>
                        <div class="decoration-line line-1"></div>
                        <div class="decoration-line line-2"></div>

                        <!-- Header with 3D Text Effect -->
                        <div class="header-section text-center mb-3">
                            <h2 class="ultra-premium-title" style="font-family: 'Montserrat', sans-serif;">
                                <span class="text-gradient">Visi</span> dan <span class="text-gradient">Misi</span>
                                <span class="school-name d-block mt-2">MA NU Luthful Ulum</span>
                            </h2>
                            <div class="animated-underline mx-auto"></div>
                        </div>

                        <!-- Vision Section with Card Effect -->
                        <div class="premium-card vision-card mb-5">
                            <div class="card-header">
                                <div class="icon-wrapper">
                                    <i class="fas"></i>
                                </div>
                                <h3 class="card-title">Visi</h3>
                            </div>
                            <div class="card-body">
                                <p class="vision-statement">
                                    TERWUJUDNYA MADRASAH UNGGUL, BERPRESTASI, TERAMPIL DAN BERAKHLAK MULIA
                                </p>
                            </div>
                        </div>

                        <!-- Mission Section with Modern List -->
                        <div class="premium-card mission-card">
                            <div class="card-header">
                                <div class="icon-wrapper mission-icon">
                                    <i class="fas"></i>
                                </div>
                                <h3 class="card-title">Misi</h3>
                            </div>
                            <div class="card-body">
                                <div class="modern-list-container">
                                    <div class="modern-list-item">
                                        <div class="item-number"><span>01</span></div>
                                        <div class="item-content">
                                            <p>Menyelenggarakan pendidikan dan pengajaran secara kontekstual, aktif,
                                                kreatif, efektif dan berkualitas untuk mencapai prestasi akademik dan non
                                                akademik sehingga peserta didik mampu berkembang secara optimal sesuai
                                                dengan potensi yang ada pada dirinya yang dilakukan dengan religius, jujur,
                                                dan disiplin;</p>
                                        </div>
                                    </div>

                                    <div class="modern-list-item">
                                        <div class="item-number"><span>02</span></div>
                                        <div class="item-content">
                                            <p>Mewujudkan pembelajaran dan pembiasaan dalam mempelajari ilmu agama, ilmu
                                                pengetahuan dan teknologi dengan menciptakan lingkungan yang Islami di
                                                madrasah yang dilakukan dengan penuh toleransi, disiplin, jujur, adil dan
                                                menjunjung tinggi nilai nilai etika serta sopan santun dalam kehidupan
                                                sehari-hari;</p>
                                        </div>
                                    </div>

                                    <div class="modern-list-item">
                                        <div class="item-number"><span>03</span></div>
                                        <div class="item-content">
                                            <p>Menyelenggarakan pembinaan, pengembangan diri, dan pelatihan keterampilan
                                                untuk menumbuh kembangkan minat, bakat, dan keterampilan peserta didik yang
                                                dilakukan dengan sifat religius, jujur, peduli, dan disiplin;</p>
                                        </div>
                                    </div>

                                    <div class="modern-list-item">
                                        <div class="item-number"><span>04</span></div>
                                        <div class="item-content">
                                            <p>Menumbuhkembangkan akhlakul karimah pada seluruh warga madrasah yang
                                                dilakukan dengan sifat religius, jujur, peduli, dan disiplin.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Element -->
                        <div class="footer-element text-center mt-5">
                            <div class="logo-container">
                                <div class="school-logo-outline">
                                    <div class="school-logo-inner">
                                        <span>MA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<style>
    /* Ultra Premium Vision Mission Styling */
    :root {
        --primary-color: #3A6B56;
        --accent-color: #FF9F00;
        --gradient-start: #3A6B56;
        --gradient-end: #FF9F00;
        /* --light-bg: #f8f9fa; */
        --dark-text: #2c3e50;
        /* --card-bg: rgba(255, 255, 255, 0.9); */
        --shadow-color: rgba(0, 0, 0, 0.1);
    }

    .vision-mission-section {
        padding: 100px 0;
    }

    .glass-container {

        z-index: 1;
    }

    /* Decorative Elements */
    .decoration-circle {
        position: absolute;
        border-radius: 50%;
        z-index: -1;
    }

    .circle-1 {
        top: -100px;
        right: -100px;
    }

    .circle-2 {
        bottom: -50px;
        left: -50px;
    }

    .decoration-line {
        position: absolute;
        z-index: -1;
    }

    .line-1 {
        width: 150px;
        height: 3px;
        background: linear-gradient(to right, transparent, var(--accent-color), transparent);
        top: 30%;
        right: -40px;
        transform: rotate(45deg);
    }

    .line-2 {
        width: 100px;
        height: 3px;
        background: linear-gradient(to right, transparent, var(--primary-color), transparent);
        bottom: 25%;
        left: -30px;
        transform: rotate(-45deg);
    }

    /* Header Styling */
    .ultra-premium-title {
        font-weight: 800;
        font-size: 42px;
        letter-spacing: 2px;
        color: var(--dark-text);
        text-transform: uppercase;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1), 0 0 15px rgba(255, 255, 255, 0.8);
    }

    .text-gradient {
        background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        position: relative;
    }

    .school-name {
        font-size: 26px;
        font-weight: 600;
        margin-top: 10px;
    }

    .animated-underline {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        border-radius: 4px;
        margin-top: 15px;
        position: relative;
        overflow: hidden;
    }

    .animated-underline::after {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.5);
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        100% {
            left: 100%;
        }
    }

    /* Card Styling */
    /* .premium-card {
        background: var(--card-bg);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 30px var(--shadow-color);
        transition: all 0.3s ease;
        transform: translateY(0);
    } */

    /* .premium-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    } */

    /* .card-header {
        display: flex;
        align-items: center;
        padding: 20px 30px;
        background: linear-gradient(135deg, var(--primary-color), darken(var(--primary-color), 10%));
        color: white;
    } */

    .mission-card .card-header {
        background: linear-gradient(135deg, var(--accent-color), darken(var(--accent-color), 10%));
    }

    .icon-wrapper {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        margin-right: 20px;
        font-size: 20px;
    }

    .mission-icon {
        background: rgba(255, 255, 255, 0.2);
    }

    .card-title {
        font-size: 24px;
        font-weight: 700;
        letter-spacing: 1px;
        margin-top: -40px;
        text-transform: uppercase;
    }

    .card-body {
        padding: 30px;
    }

    /* Vision Statement Styling */
    .vision-statement {
        font-size: 22px;
        font-weight: 700;
        text-align: center;
        color: var(--dark-text);
        letter-spacing: 1px;
        line-height: 1.6;
        padding: 20px;
        background: rgba(58, 107, 86, 0.05);
        border-radius: 10px;
        border-left: 5px solid var(--primary-color);
    }

    /* Modern List Styling */
    .modern-list-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .modern-list-item {
        display: flex;
        gap: 20px;
        padding: 5px;
        transition: all 0.3s ease;
    }

    .modern-list-item:hover {
        transform: translateX(10px);
    }

    .item-number {
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--accent-color), darken(var(--accent-color), 15%));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 18px;
        box-shadow: 0 5px 15px rgba(255, 159, 0, 0.3);
    }

    .item-content {
        background: rgba(255, 255, 255, 0.7);
        border-radius: 12px;
        padding: 15px 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border-left: 3px solid var(--accent-color);
    }

    .item-content p {
        margin: 0;
        line-height: 1.6;
        color: var(--dark-text);
        text-align: justify;
    }

    /* Footer Element Styling */
    .footer-element {
        margin-top: 50px;
    }

    .logo-container {
        display: flex;
        justify-content: center;
    }

    .school-logo-outline {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .school-logo-inner {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .school-logo-inner span {
        font-size: 24px;
        font-weight: 700;
        color: var(--primary-color);
        font-family: 'Montserrat', sans-serif;
    }

    .motto {
        font-size: 16px;
        font-style: italic;
        color: var(--dark-text);
        margin-top: 10px;
        letter-spacing: 1px;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .glass-container {
            padding: 30px 20px;
        }

        .ultra-premium-title {
            font-size: 32px;
        }

        .school-name {
            font-size: 20px;
        }

        .modern-list-item {
            flex-direction: column;
            gap: 10px;
        }

        .item-number {
            width: 40px;
            height: 40px;
            font-size: 16px;
            margin-left: 10px;
        }

        .vision-statement {
            font-size: 18px;
            padding: 15px;
        }
    }
</style>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/profil/visi-misi.blade.php ENDPATH**/ ?>