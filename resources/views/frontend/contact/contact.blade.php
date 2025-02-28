@extends('frontend.home.landingpage')

@section('content')
    <section class="contact-section py-8 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-5"
                        style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #3A6B56; margin-top: 30px; text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); letter-spacing: 1px; font-size: 28px;">
                        <span style="color: #FF9F00;">Kontak</span> Kami
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h4><strong>Alamat:</strong></h4>
                    <p>Desa Pasucen Rt. 07 Rw. 05 Kecamatan Trangkil Kabupaten Pati</p>
                    <h4><strong>Telepon:</strong></h4>
                    <p>(+62) 821-3500-6816</p>
                    <h4><strong>Email:</strong></h4>
                    <p>luthfululummanu@gmail.com</p>
                </div>

                <div class="col-lg-6 mb-4">
                    <h4><strong>Lokasi Kami:</strong></h4>
                    <div id="map" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function initMap() {
            var location = {
                lat: -6.200000,
                lng: 106.816666
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap">
    </script>
@endsection


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
