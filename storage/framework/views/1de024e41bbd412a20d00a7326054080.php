

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> UPLOAD - DOKUMEN CALON SISWA
                            </h4>
                        </div>

                        <div class="bg-white p-4 rounded-3 shadow-sm">
                            <form action="<?php echo e(route('upload_dokumen.documen')); ?>" method="POST"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <!-- Judul Upload Dokumen -->
                                

                                <div class="row">
                                    <!-- Kolom Kiri -->
                                    <div class="col-md-6">
                                        <!-- Kolom Nama -->
                                        <div class="mb-4">
                                            <label class="form-label" style="font-weight: bold;">Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control"
                                                placeholder="Tulis nama lengkap sesuai KTP atau identitas resmi Anda"
                                                required>
                                        </div>

                                        <div class="mb-4">
                                            <label class="form-label" style="font-weight: bold;">F. C. KK</label>
                                            <input type="file" name="kk" class="form-control" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" style="font-weight: bold;">F. C. AKTA
                                                KELAHIRAN</label>
                                            <input type="file" name="akta_kelahiran" class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- Kolom Kanan -->
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <label class="form-label" style="font-weight: bold;">KARTU KIP/PKH (Jika
                                                Ada)</label>
                                            <input type="file" name="kip_pkh" class="form-control">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" style="font-weight: bold;">F. C. KTP ORANG TUA</label>
                                            <input type="file" name="ktp_ortu" class="form-control" required>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" style="font-weight: bold;">IJAZAH/SKL</label>
                                            <input type="file" name="ijazah_skl" class="form-control" required>
                                        </div>
                                    </div>
                                </div>


                                <!-- Tombol Kirim -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn w-100"
                                        style="background-color: #28a745; color: white; font-family: 'Arial', sans-serif; font-weight: bold; padding: 10px;">
                                        <i class="fas fa-paper-plane"></i> Kirim
                                    </button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Popup Sukses
        <?php if(session('success')): ?>
            Swal.fire({
                title: 'Pendaftaran Berhasil!',
                text: "<?php echo e(session('success')); ?>",
                icon: 'success',
                iconColor: '#28A745',
                background: '#ffffff',
                color: '#333',
                confirmButtonText: 'OK',
                confirmButtonColor: '#28A745',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                },
                backdrop: `
                    rgba(0, 0, 0, 0.3)
                `
            });
        <?php endif; ?>

        // Popup Gagal
        <?php if(session('error')): ?>
            Swal.fire({
                title: 'Pendaftaran Gagal!',
                text: "<?php echo e(session('error')); ?>",
                icon: 'error',
                iconColor: '#DC3545',
                background: '#ffffff',
                color: '#333',
                confirmButtonText: 'Coba Lagi',
                confirmButtonColor: '#DC3545',
                showClass: {
                    popup: 'animate__animated animate__shakeX'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOut'
                },
                backdrop: `
                    rgba(0, 0, 0, 0.3)
                `
            });
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin.app.app_siswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/admin/pendaftaran/dokument-ppdb/dokumen_siswa.blade.php ENDPATH**/ ?>