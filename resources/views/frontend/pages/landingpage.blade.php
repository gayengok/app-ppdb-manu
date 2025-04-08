<!DOCTYPE html>
<html lang="en">

@include('frontend.head.head')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    .container {
        max-width: 1200px;
        margin: 0 auto;
        /* padding: 60px 20px; */
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary);
    }

    .section-title:after {
        content: '';
        position: absolute;
        height: 4px;
        width: 60px;
        background: var(--accent);
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
    }

    .feature-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .feature-card:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        opacity: 0;
        z-index: -1;
        transition: opacity 0.3s ease;
    }

    .feature-card:hover:before {
        opacity: 0.05;
    }

    .feature-icon {
        height: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #f5f7fa, #e4e8eb);
        position: relative;
        overflow: hidden;
    }

    .feature-icon img {
        max-width: 100px;
        position: relative;
        z-index: 2;
        transition: transform 0.3s ease;
    }

    .feature-card:hover .feature-icon img {
        transform: scale(1.1);
    }

    .feature-icon:after {
        content: '';
        position: absolute;
        width: 150%;
        height: 50px;
        background: white;
        bottom: -25px;
        left: -25%;
        border-radius: 50%;
    }

    .feature-content {
        padding: 30px;
        text-align: center;
    }

    .feature-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--primary);
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .feature-title:after {
        content: '';
        position: absolute;
        width: 50px;
        height: 3px;
        background: var(--accent);
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        transition: width 0.3s ease;
    }

    .feature-card:hover .feature-title:after {
        width: 80px;
    }

    .feature-description {
        color: #505c66;
        font-size: 0.95rem;
        line-height: 1.7;
    }

    @media (max-width: 768px) {
        .features-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .section-title {
            font-size: 2rem;
        }
    }

    /* Floating Contact Button */
    .floating-contact {
        position: fixed;
        right: 30px;
        bottom: 30px;
        z-index: 1000;
    }

    .contact-toggle {
        width: 60px;
        height: 60px;
        background: #FF9F00;
        border: none;
        border-radius: 50%;
        color: white;
        font-size: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(255, 159, 0, 0.3);
        transition: all 0.3s ease;
    }

    .contact-toggle:hover {
        background: #e68e00;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(255, 159, 0, 0.4);
    }

    .contact-popup {
        position: absolute;
        bottom: 75px;
        right: 0;
        width: 280px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transform: scale(0);
        transform-origin: bottom right;
        transition: transform 0.3s ease;
        z-index: 1001;
    }

    .floating-contact:hover .contact-popup {
        transform: scale(1);
    }

    .popup-header {
        background: #3A6B56;
        color: white;
        padding: 15px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .popup-header h4 {
        margin: 0;
        font-size: 16px;
        font-weight: 600;
    }

    .close-popup {
        background: none;
        border: none;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .popup-body {
        padding: 15px;
    }

    .popup-item {
        display: flex;
        align-items: center;
        padding: 12px 15px;
        color: #333;
        text-decoration: none;
        border-radius: 8px;
        transition: all 0.2s ease;
        margin-bottom: 8px;
    }

    .popup-item:last-child {
        margin-bottom: 0;
    }

    .popup-item:hover {
        background: #f8f9fa;
        color: #FF9F00;
    }

    .popup-item i {
        margin-right: 10px;
        font-size: 18px;
    }
</style>

<body>
    <!-- ======= Header ======= -->

    @include('frontend.nav.nav')

    @include('frontend.nav.section')

    @yield('content')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @include('frontend.pages.section.section')


    <div class="floating-contact">
        <button class="contact-toggle">
            <i class="fas fa-comment-dots"></i>
        </button>
        <div class="contact-popup">
            <div class="popup-header">
                <h4>Hubungi Kami</h4>
                <button class="close-popup"><i class="fas fa-times"></i></button>
            </div>
            <div class="popup-body">
                <a href="tel:+6282135006816" class="popup-item">
                    <i class="fas fa-phone"></i> Telepon
                </a>
                <a href="mailto:luthfululummanu@gmail.com" class="popup-item">
                    <i class="fas fa-envelope"></i> Email
                </a>
                <a href="https://wa.me/6282135006816" class="popup-item">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!-- Bagian konten lainnya -->

    @include('frontend.pages.contact')



    <!-- Bagian konten lainnya -->

    @include('frontend.pages.scripts')

</body>

</html>
