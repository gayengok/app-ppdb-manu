

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> FORM - IDENTITAS DIRI CALON SISWA
                            </h4>

                        </div>

                        <div class="bg-light p-3 rounded-3">
                            <form action="#" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <!-- Kolom Kiri -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama_lengkap" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Panggilan</label>
                                            <input type="text" name="nama_panggilan" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control mt-2" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-select" required>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Alamat Tempat Tinggal</label>
                                            <input type="text" name="alamat" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Kabupaten</label>
                                            <input type="text" name="kabupaten" class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- Kolom Kanan -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email Aktif</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">No. HP/WhatsApp</label>
                                            <input type="text" name="no_hp" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Sekolah Asal</label>
                                            <input type="text" name="sekolah_asal" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Ayah</label>
                                            <input type="text" name="nama_ayah" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Ibu</label>
                                            <input type="text" name="nama_ibu" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">No. HP/WhatsApp Orang Tua</label>
                                            <input type="text" name="no_hp_ortu" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn mt-6 w-100"
                                        style="background-color: #28a745; color: white; font-family: 'Arial', sans-serif; font-weight: bold; margin-top: 20px;">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin.app.app_siswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/admin/pendaftaran/syarat-ppdb/data-identitas.blade.php ENDPATH**/ ?>