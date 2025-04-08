
<?php $__env->startSection('content'); ?>
    <!-- Kontak Section Modern -->
    <section class="contact-modern">
        <div class="contact-blob"></div>
        <div class="contact-particles"></div>

        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-heading">
                        <span class="heading-accent"></span>
                        <h2 class="heading-title">
                            <span class="text-kontak">KONTAK</span> KAMI
                        </h2>
                        <p class="heading-subtitle">Hubungi kami untuk informasi lebih lanjut tentang MA NU Luthful Ulum</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-5">
                    <div class="contact-card">
                        <div class="card-header">
                            <div class="header-icon">
                                <i class="fas fa-address-card"></i>
                            </div>
                            <h3>Informasi Kontak</h3>
                        </div>

                        <div class="card-body">
                            <ul class="contact-list">
                                <li class="contact-item">
                                    <div class="item-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="item-content">
                                        <h4>Alamat</h4>
                                        <p>Desa Pasucen Rt. 07 Rw. 05 Kecamatan Trangkil Kabupaten Pati</p>
                                    </div>
                                </li>

                                <li class="contact-item">
                                    <div class="item-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="item-content">
                                        <h4>Telepon</h4>
                                        <p><a href="tel:+6282135006816">(+62) 821-3500-6816</a></p>
                                    </div>
                                </li>

                                <li class="contact-item">
                                    <div class="item-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="item-content">
                                        <h4>Email</h4>
                                        <p><a href="mailto:luthfululummanu@gmail.com">luthfululummanu@gmail.com</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="card-footer">
                            <div class="social-media">
                                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="map-card">
                        <div class="card-header">
                            <div class="header-icon">
                                <i class="fas fa-map"></i>
                            </div>
                            <h3>Lokasi Kami</h3>
                        </div>

                        <div class="map-container">
                            <div id="map"></div>
                            <div class="map-overlay">
                                <div class="overlay-content">
                                    <h4>MA NU Luthful Ulum</h4>
                                    <p>Desa Pasucen, Trangkil, Pati</p>
                                    <a href="https://goo.gl/maps/YourActualMapLink" target="_blank" class="btn-directions">
                                        <i class="fas fa-directions"></i> Petunjuk Arah
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="cta-card">
                        <div class="cta-content">
                            <h3>Punya Pertanyaan?</h3>
                            <p>Silakan kunjungi kantor kami atau hubungi kami melalui whatsapp</p>
                        </div>
                        <a href="https://wa.me/6282135006816" class="btn-whatsapp">
                            <i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap');

        /* Base styles */
        .contact-modern {
            position: relative;
            padding: 9rem 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            font-family: 'Nunito', sans-serif;
            overflow: hidden;
        }

        /* Background elements */
        .contact-blob {
            position: absolute;
            top: -200px;
            right: -200px;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle at center, rgba(255, 159, 0, 0.1) 0%, rgba(255, 159, 0, 0) 70%);
            border-radius: 50%;
            z-index: 1;
        }

        .contact-particles {
            position: absolute;
            bottom: -150px;
            left: -100px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle at center, rgba(58, 107, 86, 0.1) 0%, rgba(58, 107, 86, 0) 70%);
            border-radius: 50%;
            z-index: 1;
        }

        /* Section heading */
        .section-heading {
            position: relative;
            margin-bottom: 2rem;
            z-index: 2;
        }

        .heading-accent {
            display: block;
            width: 80px;
            height: 4px;
            margin: 0 auto 1rem;
            background: linear-gradient(90deg, #FF9F00, #3A6B56);
            border-radius: 2px;
        }

        .heading-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            letter-spacing: 2px;
        }

        .heading-title .text-primary {
            color: #FF9F00;
            position: relative;
        }

        .heading-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Contact card */
        .contact-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .contact-card .card-header {
            background: #3A6B56;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .contact-card .card-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 80%);
            z-index: 1;
        }

        .header-icon {
            width: 40px;
            height: 40px;
            background: #FF9F00;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            position: relative;
            z-index: 2;
        }

        .header-icon i {
            font-size: 20px;
        }

        .card-header h3 {
            margin: 0;
            font-weight: 700;
            font-size: 1.4rem;
            position: relative;
            z-index: 2;
        }

        .contact-card .card-body {
            padding: 30px;
        }

        .contact-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-item {
            display: flex;
            margin-bottom: 25px;
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .item-icon {
            width: 45px;
            height: 45px;
            background: rgba(58, 107, 86, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .item-icon i {
            font-size: 18px;
            color: #3A6B56;
        }

        .item-content {
            flex-grow: 1;
        }

        .item-content h4 {
            margin: 0 0 5px 0;
            font-size: 1.1rem;
            font-weight: 700;
            color: #3A6B56;
        }

        .item-content p {
            margin: 0;
            color: #495057;
            line-height: 1.6;
        }

        .item-content a {
            color: #495057;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .item-content a:hover {
            color: #FF9F00;
        }

        .contact-card .card-footer {
            padding: 20px 30px;
            background: #f8f9fa;
            border-top: 1px solid #eee;
        }

        .social-media {
            display: flex;
            justify-content: center;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
            color: #3A6B56;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #FF9F00;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(255, 159, 0, 0.3);
        }

        /* Map card */
        .map-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .map-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .map-card .card-header {
            background: #3A6B56;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .map-card .card-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 80%);
            z-index: 1;
        }

        /* .map-card .header-icon {
                                            background: #3A6B56;
                                        } */

        .map-container {
            position: relative;
            height: 350px;
        }

        #map {
            width: 100%;
            height: 100%;
        }

        .map-overlay {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            max-width: 250px;
            z-index: 999;
        }

        .overlay-content h4 {
            margin: 0 0 5px 0;
            font-size: 16px;
            font-weight: 700;
            color: #3A6B56;
        }

        .overlay-content p {
            margin: 0 0 10px 0;
            font-size: 14px;
            color: #6c757d;
        }

        .btn-directions {
            display: inline-block;
            background: #FF9F00;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-directions:hover {
            background: #e68e00;
            transform: translateY(-2px);
        }

        .btn-directions i {
            margin-right: 5px;
        }

        /* CTA Card */
        .cta-card {
            background: linear-gradient(135deg, #3A6B56 0%, #2a4e3f 100%);
            border-radius: 15px;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 15px 30px rgba(58, 107, 86, 0.3);
            position: relative;
            z-index: 2;
            overflow: hidden;
        }

        .cta-card::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .cta-card::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 160px;
            height: 160px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .cta-content {
            color: white;
        }

        .cta-content h3 {
            margin: 0 0 5px 0;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .cta-content p {
            margin: 0;
            opacity: 0.9;
        }

        .btn-whatsapp {
            background: #25D366;
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            z-index: 2;
            position: relative;
        }

        .btn-whatsapp:hover {
            background: #20bf5b;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.4);
        }

        .btn-whatsapp i {
            font-size: 20px;
            margin-right: 8px;
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

        /* Responsive */
        @media (max-width: 992px) {
            .map-container {
                height: 300px;
            }

            .cta-card {
                flex-direction: column;
                text-align: center;
            }

            .cta-content {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 768px) {
            .contact-modern {
                padding: 8rem 0;
            }

            .heading-title {
                font-size: 2rem;
            }

            .contact-card,
            .map-card {
                margin-bottom: 30px;
            }

            .map-container {
                height: 250px;
            }

            .contact-card .card-body {
                padding: 20px;
            }

            .contact-item {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 576px) {
            .heading-title {
                font-size: 1.8rem;
            }

            .cta-content h3 {
                font-size: 1.3rem;
            }

            .floating-contact {
                right: 20px;
                bottom: 20px;
            }

            .contact-toggle {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }
        }
    </style>

    <!-- Script for Google Map -->
    <script>
        function initMap() {
            // Koordinat lokasi MA NU Luthful Ulum (gunakan koordinat yang benar)
            var location = {
                lat: -6.200000, // Ganti dengan koordinat sebenarnya
                lng: 106.816666 // Ganti dengan koordinat sebenarnya
            };

            // Opsi styling untuk map
            var mapOptions = {
                zoom: 15,
                center: location,
                styles: [{
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#444444"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#f2f2f2"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                            "saturation": -100
                        }, {
                            "lightness": 45
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#c4e5f3"
                        }, {
                            "visibility": "on"
                        }]
                    }
                ]
            };

            // Buat map
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            // Custom marker icon
            var markerIcon = {
                path: 'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z',
                fillColor: '#3A6B56',
                fillOpacity: 1,
                strokeWeight: 0,
                scale: 2,
                anchor: new google.maps.Point(12, 22)
            };

            // Tambahkan marker
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                icon: markerIcon,
                title: 'MA NU Luthful Ulum',
                animation: google.maps.Animation.DROP
            });

            // Info window untuk marker
            var infowindow = new google.maps.InfoWindow({
                content: '<div style="width:220px; padding:10px;"><h5 style="margin:0 0 5px; color:#3A6B56;">MA NU Luthful Ulum</h5><p style="margin:0;">Desa Pasucen, Trangkil, Kabupaten Pati</p></div>'
            });

            // Buka info window saat marker diklik
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });

            // Tambahkan listener untuk tombol floating
            document.querySelector('.contact-toggle').addEventListener('click', function() {
                document.querySelector('.contact-popup').classList.toggle('active');
            });

            document.querySelector('.close-popup').addEventListener('click', function() {
                document.querySelector('.contact-popup').classList.remove('active');
            });
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap">
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/contact/contact.blade.php ENDPATH**/ ?>