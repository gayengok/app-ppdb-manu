

<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <div class="page-inner">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card border-0 shadow-lg rounded-lg overflow-hidden">
                        <!-- Header with gradient background -->
                        <div class="card-header bg-gradient-primary text-white p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0 font-weight-bold">
                                    <i class="fas fa-file-upload fa-fw me-2"></i> DOKUMEN CALON SISWA
                                </h4>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="bg-pattern p-4 p-md-5">
                                <form action="<?php echo e(route('upload_dokumen.documen')); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <!-- Progress indicator -->
                                    <div class="mb-5">
                                        <div class="progress rounded-pill" style="height: 10px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 0%;"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-2">
                                            <small class="text-muted">Mulai</small>
                                            <small class="text-muted">Dokumen Terverifikasi</small>
                                        </div>
                                    </div>

                                    <div class="text-center mb-4">
                                        <h5 class="fw-bold text-primary">Silakan unggah dokumen persyaratan Anda</h5>
                                        <p class="text-muted">Pastikan semua dokumen yang diunggah jelas dan lengkap</p>
                                    </div>

                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <!-- Personal Information Section -->
                                            <div class="mb-4">
                                                <div class="card border-0 bg-light rounded-lg shadow-sm">
                                                    <div class="card-body p-4">
                                                        <h6 class="text-primary mb-3">
                                                            <i class="fas fa-user-circle me-2"></i>Informasi Pribadi
                                                        </h6>

                                                        <!-- Name Field -->
                                                        <div class="mb-4 position-relative">
                                                            <label class="form-label fw-bold">Nama Lengkap</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-white"><i
                                                                        class="fas fa-user text-primary"></i></span>
                                                                <input type="text" name="nama"
                                                                    class="form-control border-start-0"
                                                                    placeholder="Sesuai KTP atau identitas resmi" required>
                                                            </div>
                                                            <small class="text-muted">Nama akan digunakan untuk identifikasi
                                                                dokumen</small>
                                                        </div>

                                                        <!-- KK Document -->
                                                        <div class="mb-4">
                                                            <label class="form-label fw-bold">Kartu Keluarga (KK)</label>
                                                            <div class="input-group file-upload">
                                                                <span class="input-group-text bg-white"><i
                                                                        class="fas fa-id-card text-primary"></i></span>
                                                                <input type="file" name="kk"
                                                                    class="form-control border-start-0" required>
                                                            </div>
                                                        </div>

                                                        <!-- Birth Certificate -->
                                                        <div class="mb-0">
                                                            <label class="form-label fw-bold">Akta Kelahiran</label>
                                                            <div class="input-group file-upload">
                                                                <span class="input-group-text bg-white"><i
                                                                        class="fas fa-certificate text-primary"></i></span>
                                                                <input type="file" name="akta_kelahiran"
                                                                    class="form-control border-start-0" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <div class="card border-0 bg-light rounded-lg shadow-sm">
                                                    <div class="card-body p-4">
                                                        <h6 class="text-primary mb-3">
                                                            <i class="fas fa-file-alt me-2"></i>Dokumen Pendukung
                                                        </h6>

                                                        <!-- KIP/PKH Card -->
                                                        <div class="mb-4">
                                                            <label class="form-label fw-bold">Kartu KIP/PKH <span
                                                                    class="badge bg-secondary ms-1">Opsional</span></label>
                                                            <div class="input-group file-upload">
                                                                <span class="input-group-text bg-white"><i
                                                                        class="fas fa-address-card text-primary"></i></span>
                                                                <input type="file" name="kip_pkh"
                                                                    class="form-control border-start-0">
                                                            </div>
                                                            <small class="text-muted">Unggah jika Anda memiliki</small>
                                                        </div>

                                                        <!-- Parents ID -->
                                                        <div class="mb-4">
                                                            <label class="form-label fw-bold">KTP Orang Tua</label>
                                                            <div class="input-group file-upload">
                                                                <span class="input-group-text bg-white"><i
                                                                        class="fas fa-id-badge text-primary"></i></span>
                                                                <input type="file" name="ktp_ortu"
                                                                    class="form-control border-start-0" required>
                                                            </div>
                                                        </div>

                                                        <!-- Diploma/Certificate -->
                                                        <div class="mb-0">
                                                            <label class="form-label fw-bold">Ijazah/SKL</label>
                                                            <div class="input-group file-upload">
                                                                <span class="input-group-text bg-white"><i
                                                                        class="fas fa-graduation-cap text-primary"></i></span>
                                                                <input type="file" name="ijazah_skl"
                                                                    class="form-control border-start-0" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="text-center mt-4">
                                        <button type="submit"
                                            class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow-sm">
                                            <i class="fas fa-paper-plane me-2"></i> Kirim Dokumen
                                        </button>
                                        <p class="mt-3 text-muted small">Dengan mengklik tombol di atas, Anda menyetujui
                                            semua persyaratan</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Help Card -->
                    <div class="card border-0 shadow-sm rounded-lg mt-4">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-question-circle text-info fa-2x"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-1">Butuh bantuan?</h6>
                                    <p class="mb-0 text-muted">Jika Anda mengalami kesulitan dalam mengunggah dokumen,
                                        silakan hubungi tim dukungan kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="<?php echo e(asset('ppdb/dokumen/dokumen.css')); ?>">

    <script>
        // Popup Sukses
        <?php if(session('success')): ?>
            Swal.fire({
                title: '<span class="text-success"><i class="fas fa-check-circle me-2"></i>Pendaftaran Berhasil!</span>',
                html: '<div class="text-center"><p class="mb-3"><?php echo e(session('success')); ?></p><p class="small text-muted">Tim kami akan segera menghubungi Anda untuk langkah selanjutnya.</p></div>',
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
        <?php endif; ?>

        <?php if(session('error')): ?>
            Swal.fire({
                title: '<span class="text-danger"><i class="fas fa-exclamation-triangle me-2"></i>Pendaftaran Gagal!</span>',
                html: '<div class="text-center"><p class="mb-2"><?php echo e(session('error')); ?></p><p class="small">Silakan periksa kembali data Anda.</p></div>',
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
        <?php endif; ?>

        function updateDocumentProgress(value) {

            const progressBar = document.querySelector('.progress-bar');

            progressBar.style.width = value + '%';

            progressBar.setAttribute('aria-valuenow', value);


            if (value > 10) {
                progressBar.textContent = value + '%';
            } else {
                progressBar.textContent = '';
            }

            if (value < 25) {
                progressBar.className = 'progress-bar bg-danger';
            } else if (value < 75) {
                progressBar.className = 'progress-bar bg-warning';
            } else {
                progressBar.className = 'progress-bar bg-success';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Get all required file inputs
            const requiredFileInputs = document.querySelectorAll('input[type="file"][required]');
            const totalRequired = requiredFileInputs.length;
            let completedUploads = 0;

            function calculateProgress() {

                if (totalRequired === 0) return 0;


                return Math.round((completedUploads / totalRequired) * 100);
            }

            requiredFileInputs.forEach(input => {
                input.addEventListener('change', function() {

                    if (this.files && this.files.length > 0) {
                        completedUploads++;
                    } else {
                        if (completedUploads > 0) completedUploads--;
                    }

                    updateDocumentProgress(calculateProgress());
                });
            });

            const form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                updateDocumentProgress(100);

            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin.app.app_siswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/admin/pendaftaran/dokument-ppdb/dokumen_siswa.blade.php ENDPATH**/ ?>