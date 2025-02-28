<!DOCTYPE html>
<html lang="en">

@include('frontend.head.head')

<body>
    <!-- ======= Header ======= -->
    @include('frontend.nav.nav')
    <!-- End Header -->

    <main>
        @yield('content')
    </main>

    <!-- Back to top button -->
    <a href="https://wa.me/1234567890" target="_blank"
        class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-whatsapp"></i>
    </a>

    <footer id="footer" class="footer">

        @include('frontend.pages.contact')
    </footer>

    <!-- End Footer -->

    @include('frontend.pages.scripts')

</body>

</html>
