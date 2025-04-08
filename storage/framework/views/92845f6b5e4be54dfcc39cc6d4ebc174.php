

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">
                                <i class="fas fa-newspaper"></i> Detail - Data Identitas Calon Siswa
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row" style="width: 30%;">Nama Lengkap</th>
                                        <td><?php echo e($student->nama_lengkap); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Panggilan</th>
                                        <td><?php echo e($student->nama_panggilan); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tempat, Tanggal Lahir</th>
                                        <td><?php echo e($student->tempat_lahir); ?>, <?php echo e($student->tanggal_lahir); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td><?php echo e($student->jenis_kelamin); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alamat Tempat Tinggal</th>
                                        <td><?php echo e($student->alamat); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kabupaten</th>
                                        <td><?php echo e($student->kabupaten); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email Aktif</th>
                                        <td><?php echo e($student->email); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No. HP/WhatsApp</th>
                                        <td><?php echo e($student->no_hp); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sekolah Asal</th>
                                        <td><?php echo e($student->sekolah_asal); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Ayah</th>
                                        <td><?php echo e($student->nama_ayah); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Ibu</th>
                                        <td><?php echo e($student->nama_ibu); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No. HP/WhatsApp Orang Tua</th>
                                        <td><?php echo e($student->no_hp_ortu); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-start">
                            <a href="<?php echo e(route('admin.students.index')); ?>" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>

                            <!-- Tombol download PDF -->
                            <a href="<?php echo e(route('students.downloadPdf', $student->id)); ?>" class="btn btn-primary">
                                <i class="fas fa-print"></i> Cetak
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/students/show.blade.php ENDPATH**/ ?>