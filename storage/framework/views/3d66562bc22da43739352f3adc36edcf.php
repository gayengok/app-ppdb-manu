

<?php $__env->startSection('content'); ?>
    <section class="verbal-test-section py-8 bg-light">
        <div class="container">
            <h2 class="text-center mb-5"
                style="font-family: 'Montserrat', sans-serif; font-weight: 600; color: #3A6B56; margin-top: 30px; text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2); letter-spacing: 1px; font-size: 28px;">
                <span style="color: #FF9F00;">Soal</span> Verbal
            </h2>


            <div class="card shadow p-4">
                <form action="#" method="POST">
                    <?php echo csrf_field(); ?>

                    <div id="timer" class="text-end fw-bold text-danger mb-3" style="font-size: 20px;">
                        <span id="countdown"
                            style="display: inline-block; padding: 5px 10px; border: 2px solid red; border-radius: 5px;">
                            10:00
                        </span>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">1. Pilih sinonim dari kata "Abstrak"</label>
                        <div>
                            <input type="radio" name="q1" value="a" required> a) Nyata <br>
                            <input type="radio" name="q1" value="b"> b) Konkret <br>
                            <input type="radio" name="q1" value="c"> c) Teoretis <br>
                            <input type="radio" name="q1" value="d"> d) Jelas
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">2. Pilih antonim dari kata "Gigih"</label>
                        <div>
                            <input type="radio" name="q2" value="a" required> a) Ulet <br>
                            <input type="radio" name="q2" value="b"> b) Pantang menyerah <br>
                            <input type="radio" name="q2" value="c"> c) Mudah menyerah <br>
                            <input type="radio" name="q2" value="d"> d) Kuat
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">3. Pilih sinonim dari kata "Elok"</label>
                        <div>
                            <input type="radio" name="q3" value="a" required> a) Buruk <br>
                            <input type="radio" name="q3" value="b"> b) Indah <br>
                            <input type="radio" name="q3" value="c"> c) Kusam <br>
                            <input type="radio" name="q3" value="d"> d) Sederhana
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">4. Pilih antonim dari kata "Euforia"</label>
                        <div>
                            <input type="radio" name="q4" value="a" required> a) Kebahagiaan <br>
                            <input type="radio" name="q4" value="b"> b) Kesedihan <br>
                            <input type="radio" name="q4" value="c"> c) Kegembiraan <br>
                            <input type="radio" name="q4" value="d"> d) Keceriaan
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">5. Pilih sinonim dari kata "Bijaksana"</label>
                        <div>
                            <input type="radio" name="q5" value="a" required> a) Bodoh <br>
                            <input type="radio" name="q5" value="b"> b) Arif <br>
                            <input type="radio" name="q5" value="c"> c) Gegabah <br>
                            <input type="radio" name="q5" value="d"> d) Ceroboh
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Kirim Jawaban</button>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<style>
    .py-8 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important;
    }
</style>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (!localStorage.getItem("testStarted")) {
            alert("Silakan klik tombol 'MULAI' untuk memulai tes.");
            window.location.href = "<?php echo e(route('soal-verbal.index')); ?>";
        }
    });
</script>

<?php echo $__env->make('frontend.home.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/frontend/test-soal/test-verbal/soal-verbal.blade.php ENDPATH**/ ?>