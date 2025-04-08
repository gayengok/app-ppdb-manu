<footer id="footer" class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="public/frontend/assets/img/logo.png" alt="">
                        <span style="color: #3A6B56">MA NU LUTHFUL ULUM</span>
                    </a>
                    <p>Menjadi lembaga pendidikan yang melahirkan generasi cerdas, berakhlak mulia, dan siap memberikan
                        manfaat bagi masyarakat dengan ilmu yang bermanfaat.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="btn rounded-circle me-2 p-2" title="Twitter">
                            <i class="bi bi-twitter fs-3"></i>
                        </a>
                        <a href="#" class="btn rounded-circle me-2 p-2" title="Facebook">
                            <i class="bi bi-facebook fs-3"></i>
                        </a>
                        <a href="#" class="btn rounded-circle me-2 p-2" title="Instagram">
                            <i class="bi bi-instagram fs-3"></i>
                        </a>
                        <a href="#" class="btn rounded-circle me-2 p-2" title="TikTok">
                            <i class="bi bi-tiktok fs-3"></i>
                        </a>
                        <a href="#" class="btn rounded-circle p-2" title="YouTube">
                            <i class="bi bi-youtube fs-3"></i>
                        </a>
                    </div>

                </div>

                <style>
                    .social-links a {
                        font-size: 20px;
                        color: #fff;
                        background-color: #e2e5e8;
                        padding: 20px;
                        transition: transform 0.1s ease, box-shadow 0.1s ease;
                        /* Efek transisi saat hover */
                    }

                    .social-links a:hover {
                        transform: translateY(-5px);
                        /* Efek mengangkat ikon saat hover */
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                        /* Bayangan lebih besar saat hover */
                    }

                    .social-links a .bi {
                        font-size: 10px;
                        /* Ukuran ikon */
                    }

                    .social-links a .fs-3 {
                        font-size: 1.1rem;
                        /* Ukuran ikon lebih besar menggunakan Bootstrap's font size utility */
                    }

                    .social-links {
                        text-align: left;
                    }
                </style>

                <div class="col-lg-2 col-6 footer-links">
                    <h4 style="color: #3A6B56">Essential Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Redaksi</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Karir</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Pedoman Media</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4 style="color: #3A6B56">Our Features</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="<?php echo e(route('news.blog')); ?>">Berita</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="<?php echo e(route('ppdb.siswa')); ?>">PPDB</a>
                        </li>
                        <li><i class="bi bi-chevron-right"></i> <a href="<?php echo e(route('galery.foto')); ?>">Gallry</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="<?php echo e(route('profil.sejarah')); ?>">Profil</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4 style="color: #3A6B56">Contact Us</h4>
                    <p>
                        Desa Pasucen Rt. 07 Rw. 05<br>
                        Kecamatan Trangkil<br>
                        Kabupaten Pati <br><br>
                        <strong>Phone:</strong> 082135006816<br>
                        <strong>Email:</strong> luthfululummanu@gmail.com<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>MA NU</span></strong>.Luthful Ulum
        </div>
</footer><!-- End Footer -->
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/pages/contact.blade.php ENDPATH**/ ?>