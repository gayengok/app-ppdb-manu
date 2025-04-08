<div class="modal fade" id="editJadwalModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg border-0 rounded-4">
            <div class="modal-header bg-gradient-warning py-4 border-0">
                <h5 class="modal-title fw-bold text-white">
                    <i class="fas fa-calendar-edit me-3 text-white"></i>Edit Jadwal Pelaksanaan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form id="editJadwalForm" method="POST" action="<?php echo e(route('admin.informasi.update', $informasi->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?> <!-- Ini wajib agar Laravel mengenali PUT -->

                <input type="hidden" name="id" value="<?php echo e($informasi->id); ?>">

                <label for="edit-tahap">Tahap</label>
                <input type="text" class="form-control" id="edit-tahap" name="tahap"
                    value="<?php echo e($informasi->tahap); ?>" required>

                <label for="edit-tanggal">Tanggal Pelaksanaan</label>
                <input type="date" class="form-control" id="edit-tanggal" name="tanggal"
                    value="<?php echo e($informasi->tanggal); ?>" required>

                <label for="edit-deskripsi">Deskripsi</label>
                <textarea class="form-control" id="edit-deskripsi" name="deskripsi" required><?php echo e($informasi->deskripsi); ?></textarea>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>


        </div>
    </div>
</div>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/informasi/ppdb/edit.blade.php ENDPATH**/ ?>