@extends('backend.admin.app.app_siswa')

@section('content')
    <div class="container-fluid py-5 bg-light">
        <div class="page-inner">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <!-- Main Card -->
                    <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                        <!-- Header with Gradient & Animation -->
                        <div class="card-header p-0">
                            <div class="position-relative">
                                <div class="bg-gradient-primary-to-secondary p-5 text-white">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h3 class="card-title mb-1 fw-bold animate__animated animate__fadeInLeft">
                                                <i class="fas fa-user-graduate me-2"></i> FORMULIR PENDAFTARAN SISWA BARU
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- Decorative Wave -->
                                <div class="position-absolute bottom-0 w-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
                                        <path fill="#ffffff" fill-opacity="1"
                                            d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <!-- Form Section with Premium Design -->
                            <div class="p-4">
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div
                                            class="alert alert-info bg-info bg-opacity-10 border-start border-info border-4 d-flex">
                                            <div class="me-3">
                                                <i class="fas fa-info-circle text-info fs-3"></i>
                                            </div>
                                            <div>
                                                <h6 class="fw-bold mb-1">Petunjuk Pengisian</h6>
                                                <p class="mb-0 small">Isi data dengan benar dan lengkap. Pastikan email dan
                                                    nomor telepon aktif untuk menerima informasi penting terkait
                                                    pendaftaran.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-light p-4 mb-4 rounded-3 border-start border-primary border-5">
                                    <h5 class="text-primary mb-3 fw-bold">
                                        <i class="fas fa-id-card me-2"></i>IDENTITAS DIRI CALON SISWA
                                    </h5>
                                    <p class="text-muted small mb-0">Lengkapi data identitas diri Anda dengan benar sesuai
                                        dokumen resmi yang dimiliki</p>
                                </div>

                                <form action="{{ route('identitas_siswa.store') }}" method="POST" class="needs-validation"
                                    novalidate>
                                    @csrf
                                    <div class="row g-4">
                                        <!-- Left Column -->
                                        <div class="col-md-6">
                                            <div class="card shadow-sm border-0 h-100">
                                                <div class="card-header bg-primary bg-opacity-10">
                                                    <h6 class="mb-0 fw-bold text-primary">
                                                        <i class="fas fa-user me-2"></i>Data Pribadi
                                                    </h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label fw-bold">Nama Lengkap <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group input-group-lg">
                                                            <span class="input-group-text bg-white">
                                                                <i class="fas fa-user text-primary"></i>
                                                            </span>
                                                            <input type="text" name="nama_lengkap"
                                                                class="form-control border-start-0"
                                                                placeholder="Masukkan nama lengkap" required>
                                                            <div class="invalid-feedback">Nama lengkap wajib diisi</div>
                                                        </div>
                                                        <div class="form-text">Sesuai dengan dokumen resmi (KTP/Akta
                                                            Kelahiran)</div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label class="form-label fw-bold">Nama Panggilan <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-white">
                                                                <i class="fas fa-user-tag text-primary"></i>
                                                            </span>
                                                            <input type="text" name="nama_panggilan"
                                                                class="form-control border-start-0"
                                                                placeholder="Masukkan nama panggilan" required>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">
                                                        <div class="col-md-6">
                                                            <label class="form-label fw-bold">Tempat Lahir <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-white">
                                                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                                                </span>
                                                                <input type="text" name="tempat_lahir"
                                                                    class="form-control border-start-0"
                                                                    placeholder="Kota kelahiran" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label fw-bold">Tanggal Lahir <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-white">
                                                                    <i class="fas fa-calendar-alt text-primary"></i>
                                                                </span>
                                                                <input type="date" name="tanggal_lahir"
                                                                    class="form-control border-start-0" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label class="form-label fw-bold">Jenis Kelamin <span
                                                                class="text-danger">*</span></label>
                                                        <div class="d-flex flex-wrap">
                                                            <div
                                                                class="form-check custom-option custom-option-basic mb-3 me-3">
                                                                <input name="jenis_kelamin" class="form-check-input"
                                                                    type="radio" value="Laki-laki" id="laki" required
                                                                    checked>
                                                                <label class="form-check-label py-2 px-3 rounded-3"
                                                                    for="laki">
                                                                    <i class="fas fa-male text-primary me-2"></i> Laki-laki
                                                                </label>
                                                            </div>
                                                            <div class="form-check custom-option custom-option-basic mb-3">
                                                                <input name="jenis_kelamin" class="form-check-input"
                                                                    type="radio" value="Perempuan" id="perempuan">
                                                                <label class="form-check-label py-2 px-3 rounded-3"
                                                                    for="perempuan">
                                                                    <i class="fas fa-female text-danger me-2"></i>
                                                                    Perempuan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label class="form-label fw-bold">Alamat Tempat Tinggal <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-white">
                                                                <i class="fas fa-home text-primary"></i>
                                                            </span>
                                                            <textarea name="alamat" class="form-control border-start-0" rows="3"
                                                                placeholder="Alamat lengkap tempat tinggal" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="form-label fw-bold">Kabupaten <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-white">
                                                                <i class="fas fa-city text-primary"></i>
                                                            </span>
                                                            <input type="text" name="kabupaten"
                                                                class="form-control border-start-0"
                                                                placeholder="Masukkan Kabupaten/Kota" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="col-md-6">
                                            <div class="card shadow-sm border-0 h-100">
                                                <div class="card-header bg-primary bg-opacity-10">
                                                    <h6 class="mb-0 fw-bold text-primary">
                                                        <i class="fas fa-user-friends me-2"></i>Informasi Kontak & Keluarga
                                                    </h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group mb-4">
                                                        <label class="form-label fw-bold">Email Aktif <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-white">
                                                                <i class="fas fa-envelope text-primary"></i>
                                                            </span>
                                                            <input type="email" name="email"
                                                                class="form-control border-start-0"
                                                                placeholder="contoh@email.com" required>
                                                        </div>
                                                        <div class="form-text">
                                                            <i class="fas fa-info-circle me-1"></i>
                                                            Pastikan email aktif untuk menerima informasi penting
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label class="form-label fw-bold">No. HP/WhatsApp <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-white">
                                                                <i class="fab fa-whatsapp text-success"></i>
                                                            </span>
                                                            <input type="text" name="no_hp"
                                                                class="form-control border-start-0"
                                                                placeholder="08xxxxxxxxxx" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label class="form-label fw-bold">Sekolah Asal <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-white">
                                                                <i class="fas fa-school text-primary"></i>
                                                            </span>
                                                            <input type="text" name="sekolah_asal"
                                                                class="form-control border-start-0"
                                                                placeholder="Nama sekolah asal" required>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="alert alert-light border border-primary border-opacity-25 mb-4">
                                                        <div class="d-flex">
                                                            <div class="me-3">
                                                                <i class="fas fa-user-tie text-primary fs-4"></i>
                                                            </div>
                                                            <div>
                                                                <h6 class="fw-bold mb-2">Data Orang Tua</h6>
                                                                <p class="small mb-0">Lengkapi data orang tua atau wali
                                                                    yang dapat dihubungi</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label class="form-label fw-bold">Nama Ayah <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-white">
                                                                <i class="fas fa-user-tie text-primary"></i>
                                                            </span>
                                                            <input type="text" name="nama_ayah"
                                                                class="form-control border-start-0"
                                                                placeholder="Nama lengkap ayah" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label class="form-label fw-bold">Nama Ibu <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-white">
                                                                <i class="fas fa-user-friends text-primary"></i>
                                                            </span>
                                                            <input type="text" name="nama_ibu"
                                                                class="form-control border-start-0"
                                                                placeholder="Nama lengkap ibu" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label class="form-label fw-bold">No. HP/WhatsApp Orang Tua <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-white">
                                                                <i class="fas fa-phone text-primary"></i>
                                                            </span>
                                                            <input type="text" name="no_hp_ortu"
                                                                class="form-control border-start-0"
                                                                placeholder="08xxxxxxxxxx" required>
                                                        </div>
                                                        <div class="form-text">
                                                            <i class="fas fa-info-circle me-1"></i>
                                                            Nomor yang dapat dihubungi untuk informasi penting
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Terms & Submit Section -->
                                    <div class="mt-5">
                                        <div class="card bg-light border-0 shadow-sm">
                                            <div class="card-body">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="terms"
                                                        required>
                                                    <label class="form-check-label" for="terms">
                                                        <span class="fw-bold">Pernyataan:</span> Saya menyatakan bahwa data
                                                        yang diisi adalah benar dan dapat
                                                        dipertanggungjawabkan
                                                    </label>
                                                </div>

                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-lg px-5 py-2 btn-hover-scale">
                                                        <i class="fas fa-paper-plane me-1"></i> Kirim
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Action Button -->
                    <div class="position-fixed bottom-0 end-0 p-4">
                        <button type="button" class="btn btn-primary btn-lg rounded-circle shadow-lg"
                            data-bs-toggle="modal" data-bs-target="#helpModal">
                            <i class="fas fa-headset"></i>
                        </button>
                    </div>

                    <!-- Help Modal -->
                    <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0 shadow">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="helpModalLabel">
                                        <i class="fas fa-question-circle me-2"></i> Pusat Bantuan
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <img src="/assets/images/support.png" alt="Support" width="60">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-1">Butuh bantuan?</h5>
                                            <p class="mb-0 text-muted">Tim kami siap membantu Anda dengan proses
                                                pendaftaran.</p>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="d-flex mb-3">
                                            <div class="me-2 text-primary">
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">Telepon</h6>
                                                <p class="mb-0">(021) 1234-5678</p>
                                            </div>
                                        </div>

                                        <div class="d-flex mb-3">
                                            <div class="me-2 text-primary">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">Email</h6>
                                                <p class="mb-0">pendaftaran@sekolah.ac.id</p>
                                            </div>
                                        </div>

                                        <div class="d-flex">
                                            <div class="me-2 text-primary">
                                                <i class="fab fa-whatsapp"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">WhatsApp</h6>
                                                <p class="mb-0">0812-3456-7890</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="alert alert-info small p-3">
                                        <i class="fas fa-info-circle me-2"></i>
                                        Jam operasional: Senin-Jumat, 08.00-16.00 WIB
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fas fa-question-circle me-1"></i> FAQ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom CSS -->
    <style>
        .form-control {
            font-size: 12px;
        }

        .form-check .form-check-input {
            margin-left: -18px;
            margin-right: .75em;
        }

        /* Premium Style Enhancements */
        .bg-gradient-primary-to-secondary {
            background: linear-gradient(135deg, #4e73df 0%, #36b9cc 100%);
        }

        .btn-hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .btn-hover-shadow:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            transition: box-shadow 0.3s ease;
        }

        .custom-option-basic input[type="radio"] {
            display: none;
        }

        .custom-option-basic input[type="radio"]+label {
            border: 1px solid #dee2e6;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .custom-option-basic input[type="radio"]:checked+label {
            border-color: #4e73df;
            background-color: rgba(78, 115, 223, 0.1);
            color: #4e73df;
            font-weight: bold;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #bbd0ff;
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
        }

        .input-group-text {
            border-right: 0;
        }

        /* Animations */
        @keyframes highlightField {
            0% {
                background-color: rgba(78, 115, 223, 0.1);
            }

            100% {
                background-color: transparent;
            }
        }

        .form-control:focus,
        .form-select:focus {
            animation: highlightField 1s ease;
        }
    </style>

    <!-- Custom JavaScript -->
    <script>
        // Form validation
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();

                            // Find first invalid field and scroll to it
                            const firstInvalid = form.querySelector(':invalid');
                            if (firstInvalid) {
                                firstInvalid.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'center'
                                });
                                firstInvalid.classList.add('animate__animated',
                                    'animate__headShake');
                                setTimeout(() => {
                                    firstInvalid.classList.remove('animate__animated',
                                        'animate__headShake');
                                }, 1000);
                            }
                        }
                        form.classList.add('was-validated');
                    }, false);
                });

                // Enhanced field interaction
                const formControls = document.querySelectorAll('.form-control, .form-select');
                formControls.forEach(control => {
                    control.addEventListener('focus', function() {
                        const formGroup = this.closest('.form-group');
                        if (formGroup) {
                            formGroup.querySelector('label')?.classList.add('text-primary');
                        }
                    });

                    control.addEventListener('blur', function() {
                        const formGroup = this.closest('.form-group');
                        if (formGroup) {
                            formGroup.querySelector('label')?.classList.remove('text-primary');
                        }
                    });
                });
            }, false);
        })();

        // Popup messages with advanced styling
        @if (session('success'))
            Swal.fire({
                title: '<span class="text-success"><i class="fas fa-check-circle me-2"></i>Pendaftaran Berhasil!</span>',
                html: '<div class="text-center"><p class="mb-3">{{ session('success') }}</p><p class="small text-muted">Tim kami akan segera menghubungi Anda untuk langkah selanjutnya.</p></div>',
                icon: 'success',
                iconColor: '#28A745',
                background: '#ffffff',
                color: '#333',
                confirmButtonText: '<i class="fas fa-thumbs-up me-1"></i> Selesai',
                confirmButtonColor: '#28A745',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                },
                backdrop: `
            rgba(40, 167, 69, 0.1)
        `
            });
        @endif

        @if (session('error'))
            Swal.fire({
                title: '<span class="text-danger"><i class="fas fa-exclamation-triangle me-2"></i>Pendaftaran Gagal!</span>',
                html: '<div class="text-center"><p class="mb-2">{{ session('error') }}</p><p class="small">Silakan periksa kembali data Anda.</p></div>',
                icon: 'error',
                iconColor: '#DC3545',
                background: '#ffffff',
                color: '#333',
                confirmButtonText: '<i class="fas fa-redo me-1"></i> Coba Lagi',
                confirmButtonColor: '#DC3545',
                showClass: {
                    popup: 'animate__animated animate__shakeX'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOut'
                },
                backdrop: `
            rgba(220, 53, 69, 0.1)
        `
            });
        @endif
    </script>
@endsection
