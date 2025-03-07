

<?php $__env->startSection('content'); ?>
    <section class="py-5 bg-light" style="margin-top: 80px; max-height: 100vh; overflow-y: auto;">
        <div class="container my-4">
            <?php if($pengumuman->isEmpty()): ?>
                <p class="text-center text-muted">Tidak ada data pengumuman saat ini.</p>
            <?php else: ?>
                <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="text-center mb-4">
                        <h2 class="fw-bold" style="font-family: 'Roboto', sans-serif; color: #2c3e50;">
                            <?php echo e(e($item->judul)); ?>

                        </h2>
                        <p class="lead" style="font-family: 'Roboto', sans-serif;">
                            Selamat kepada seluruh siswa baru MA NU Luthful Ulum yang telah berhasil lulus!
                            Silakan unduh pengumuman kelulusan di bawah ini.
                        </p>
                    </div>

                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h5 class="card-title">Unduh Pengumuman Kelulusan</h5>
                            <p class="card-text">
                                <?php if(!empty($item->file_path)): ?>
                                    Klik tombol di bawah ini untuk mengunduh dokumen pengumuman kelulusan Anda.
                                <?php else: ?>
                                    File pengumuman belum tersedia saat ini. Silakan cek kembali nanti.
                                <?php endif; ?>
                            </p>

                            <?php if(!empty($item->file_path)): ?>
                                <a href="<?php echo e(asset('storage/' . $item->file_path)); ?>" class="btn btn-success btn-lg"
                                    download>
                                    Unduh Pengumuman
                                </a>
                            <?php else: ?>
                                <button class="btn btn-secondary btn-lg" disabled>
                                    File Belum Tersedia
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <p class="text-muted">
                            Jika Anda mengalami kesulitan dalam mengunduh, silakan hubungi pihak sekolah.
                        </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/pengumuman/pengumuman.blade.php ENDPATH**/ ?>