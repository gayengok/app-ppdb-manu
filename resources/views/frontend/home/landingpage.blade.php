<!DOCTYPE html>
<html lang="en">

@include('frontend.head.head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
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
    <!-- End Header -->

    <main>
        @yield('content')
    </main>

    <!-- Back to top button -->
    {{-- <a href="https://wa.me/1234567890" target="_blank"
        class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-whatsapp"></i>
    </a> --}}

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

    <footer id="footer" class="footer">

        @include('frontend.pages.contact')
    </footer>

    <!-- End Footer -->

    @include('frontend.pages.scripts')

</body>

</html>
