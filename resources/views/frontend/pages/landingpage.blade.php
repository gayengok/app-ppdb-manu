<!DOCTYPE html>
<html lang="en">

@include('frontend.head.head')

<body>
    <!-- ======= Header ======= -->

    @include('frontend.nav.nav')

    @include('frontend.nav.section')

    @yield('content')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @include('frontend.pages.section.section')

    <!-- End Hero -->
    <a href="https://wa.me/1234567890" target="_blank"
        class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Bagian konten lainnya -->

    @include('frontend.pages.contact')



    <!-- Bagian konten lainnya -->

    @include('frontend.pages.scripts')

</body>

</html>
