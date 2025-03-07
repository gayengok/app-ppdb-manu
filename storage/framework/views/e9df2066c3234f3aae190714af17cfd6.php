


<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Data - Hasil Seleksi Siswa Baru
                            </h4>
                            <div class="d-flex justify-content-between mb-3">
                                <a href="<?php echo e(route('hasil_seleksi.printPDF')); ?>" class="btn btn-danger"
                                    style="margin-right: 10px;">
                                    <i class="fas fa-print"></i> Cetak PDF
                                </a>

                                <!-- Tombol untuk tambah data -->
                                <a href="<?php echo e(route('hasil_seleksi.create')); ?>" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Tambah
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"
                                    style="border: 1px solid #ddd; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $hasilSeleksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($hasil->nama_lengkap); ?></td>
                                                <td class="text-center">
                                                    <form action="<?php echo e(route('hasil_seleksi.update', $hasil->id)); ?>"
                                                        method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <button type="submit"
                                                            class="btn <?php echo e($hasil->status === 'Lolos' ? 'btn-success' : 'btn-danger'); ?> 
                                                                        btn-lg 
                                                                        d-flex 
                                                                        align-items-center 
                                                                        justify-content-center 
                                                                        transition-all 
                                                                        hover:scale-105 
                                                                        focus:outline-none 
                                                                        shadow-md"
                                                            style="font-size: 16px; padding: 10px 20px;">
                                                            <i class="fas <?php echo e($hasil->status === 'Lolos' ? 'fa-check-circle' : 'fa-times-circle'); ?>"
                                                                style="margin-right: 8px;"></i>
                                                            <?php echo e($hasil->status); ?>

                                                        </button>
                                                    </form>
                                                </td>
                                                <td class="text-center">
                                                    <form action="<?php echo e(route('hasil_seleksi.destroy', $hasil->id)); ?>"
                                                        method="POST" style="display:inline;">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                            <i class="fas fa-trash-alt" style="font-size: 18px;"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>Showing <?php echo e($hasilSeleksi->firstItem()); ?> to <?php echo e($hasilSeleksi->lastItem()); ?> of
                                        <?php echo e($hasilSeleksi->total()); ?> entries</span>
                                </div>
                                <div>
                                    <?php echo e($hasilSeleksi->links('pagination::bootstrap-4')); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if(session('success')): ?>
                Swal.fire({
                    title: 'Berhasil!',
                    text: '<?php echo e(session('success')); ?>',
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
                    backdrop: `rgba(0, 0, 0, 0.3)`
                });
            <?php endif; ?>
        });
    </script>
<?php $__env->stopSection(); ?>


<style>
    .pagination {
        display: inline-block;
    }

    .pagination li {
        display: inline;
    }

    .pagination li a,
    .pagination li span {
        border: 1px solid #ddd;
        padding: 8px 16px;
        margin: 0 4px;
        text-decoration: none;
        color: #007bff;
        border-radius: 4px;
        font-weight: bold;
    }

    .pagination li a:hover,
    .pagination li span:hover {
        background-color: #007bff;
        color: white;
    }

    .pagination .active span {
        background-color: #007bff;
        color: white;
        border: 1px solid #007bff;
    }

    .pagination .disabled span {
        background-color: #f1f1f1;
        color: #ccc;
        border: 1px solid #ddd;
    }
</style>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/students/hasil-seleksi.blade.php ENDPATH**/ ?>