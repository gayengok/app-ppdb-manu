

<?php $__env->startSection('content'); ?>
    <section class="english-test-section py-8 bg-light">
        <div class="container">
            <h2 class="text-center mb-5"
                style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #3A6B56; margin-top: 30px; text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2); letter-spacing: 1px; font-size: 30px;">
                <span style="color: #FF9F00;">Petunjuk</span> Mengerjakan Soal
            </h2>

            <div class="card shadow-lg border-0 rounded-4 p-4" style="background: linear-gradient(135deg, #f9f9f9, #ffffff);">
                <div class="card-body">
                    <p class="text-muted" style="font-size: 18px; font-weight: 500;">Silakan baca petunjuk di bawah ini
                        sebelum mengerjakan soal:</p>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item border-0 bg-transparent" style="font-size: 16px;"><i
                                class="bi bi-check-circle-fill text-success me-2"></i>Pastikan Anda sudah membaca semua soal
                            dengan baik sebelum menjawab.</li>
                        <li class="list-group-item border-0 bg-transparent" style="font-size: 16px;"><i
                                class="bi bi-check-circle-fill text-success me-2"></i>Setiap soal memiliki 4 pilihan
                            jawaban: A, B, C, dan D.</li>
                        <li class="list-group-item border-0 bg-transparent" style="font-size: 16px;"><i
                                class="bi bi-check-circle-fill text-success me-2"></i>Pilih jawaban yang paling benar dengan
                            mengklik opsi yang sesuai.</li>
                        <li class="list-group-item border-0 bg-transparent" style="font-size: 16px;"><i
                                class="bi bi-check-circle-fill text-success me-2"></i>Setelah selesai mengerjakan semua
                            soal, klik tombol "Selesai" untuk mengirim jawaban.</li>
                        <li class="list-group-item border-0 bg-transparent" style="font-size: 16px;"><i
                                class="bi bi-check-circle-fill text-success me-2"></i>Skor akan dihitung berdasarkan jumlah
                            jawaban yang benar.</li>
                        <li class="list-group-item border-0 bg-transparent" style="font-size: 16px;"><i
                                class="bi bi-check-circle-fill text-success me-2"></i>Anda tidak dapat kembali ke soal
                            sebelumnya setelah mengklik "Selesai".</li>
                        <li class="list-group-item border-0 bg-transparent" style="font-size: 16px;"><i
                                class="bi bi-check-circle-fill text-success me-2"></i>Pastikan koneksi internet Anda stabil
                            selama mengerjakan tes.</li>
                    </ul>
                    <div class="text-center">
                        <a href="<?php echo e(route('pilihan-soal.index')); ?>"
                            class="btn btn-lg btn-success rounded-pill px-5 shadow-sm"
                            style="font-size: 18px; font-weight: 600;">Mulai Mengerjakan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/test-soal/petunjuk/petunjuk.blade.php ENDPATH**/ ?>