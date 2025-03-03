

<?php $__env->startSection('content'); ?>
    <section class="numeric-test-section py-8 bg-light">
        <div class="container">
            <h2 class="text-center mb-5"
                style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #3A6B56; margin-top: 30px; text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); letter-spacing: 1px; font-size: 28px;">
                <span style="color: #FF9F00;">Soal</span> Numerik
            </h2>

            <div class="card shadow p-4">
                <form action="#" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="mb-4">
                        <label class="form-label fw-bold">1. Berapakah hasil dari 25 + 37?</label>
                        <div>
                            <input type="radio" name="q1" value="a" required> a) 52 <br>
                            <input type="radio" name="q1" value="b"> b) 62 <br>
                            <input type="radio" name="q1" value="c"> c) 58 <br>
                            <input type="radio" name="q1" value="d"> d) 63
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">2. Jika X = 8 dan Y = 3, berapakah nilai dari X × Y?</label>
                        <div>
                            <input type="radio" name="q2" value="a" required> a) 24 <br>
                            <input type="radio" name="q2" value="b"> b) 21 <br>
                            <input type="radio" name="q2" value="c"> c) 26 <br>
                            <input type="radio" name="q2" value="d"> d) 30
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">3. 144 dibagi dengan 12 adalah?</label>
                        <div>
                            <input type="radio" name="q3" value="a" required> a) 10 <br>
                            <input type="radio" name="q3" value="b"> b) 11 <br>
                            <input type="radio" name="q3" value="c"> c) 12 <br>
                            <input type="radio" name="q3" value="d"> d) 13
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">4. Berapakah hasil dari 7 × 6 - 5?</label>
                        <div>
                            <input type="radio" name="q4" value="a" required> a) 37 <br>
                            <input type="radio" name="q4" value="b"> b) 42 <br>
                            <input type="radio" name="q4" value="c"> c) 40 <br>
                            <input type="radio" name="q4" value="d"> d) 36
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">5. Jika 9² = ?</label>
                        <div>
                            <input type="radio" name="q5" value="a" required> a) 72 <br>
                            <input type="radio" name="q5" value="b"> b) 81 <br>
                            <input type="radio" name="q5" value="c"> c) 90 <br>
                            <input type="radio" name="q5" value="d"> d) 99
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Kirim Jawaban</button>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/test-soal/test-numeric/test-numeric.blade.php ENDPATH**/ ?>