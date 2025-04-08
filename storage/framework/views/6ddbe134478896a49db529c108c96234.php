

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner py-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-gradient-primary text-white">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle bg-white text-primary mr-3">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <h4 class="card-title mb-0 font-weight-bold">Input Data Siswa Kelas 10</h4>
                            </div>
                        </div>

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger border-left-danger shadow-sm">
                                <div class="d-flex">
                                    <div class="alert-icon">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div>
                                        <ul class="list-unstyled mb-0">
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="card-body p-4">
                            <form id="formTambahSiswa" action="<?php echo e(route('kelas-12.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="nisn"
                                                class="form-label text-uppercase text-muted"><small>NISN</small></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light"><i
                                                            class="fas fa-id-card"></i></span>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" id="nisn"
                                                    name="nisn" placeholder="Masukkan NISN siswa" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="full_name" class="form-label text-uppercase text-muted"><small>Nama
                                                    Lengkap</small></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light"><i
                                                            class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control form-control-lg" id="full_name"
                                                    name="full_name" placeholder="Masukkan nama lengkap" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="gender" class="form-label text-uppercase text-muted"><small>Jenis
                                                    Kelamin</small></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light"><i
                                                            class="fas fa-venus-mars"></i></span>
                                                </div>
                                                <select class="form-control form-control-lg" id="gender" name="gender"
                                                    required>
                                                    <option value="" selected disabled>-- Pilih Jenis Kelamin --
                                                    </option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="status"
                                                class="form-label text-uppercase text-muted"><small>Status</small></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light"><i
                                                            class="fas fa-check-circle"></i></span>
                                                </div>
                                                <select class="form-control form-control-lg" id="status" name="status"
                                                    required>
                                                    <option value="" selected disabled>-- Pilih Status --</option>
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="address"
                                        class="form-label text-uppercase text-muted"><small>Alamat</small></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light"><i
                                                    class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <textarea class="form-control form-control-lg" id="address" name="address" rows="3"
                                            placeholder="Masukkan alamat lengkap" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group mt-5 mb-3 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5 mr-3">
                                        <i class="fas fa-save mr-2"></i> Simpan Data
                                    </button>
                                    <a href="<?php echo e(route('kelas-10.index')); ?>" class="btn btn-light btn-lg px-5">
                                        <i class="fa fa-arrow-left mr-2"></i> Kembali
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
        }

        .icon-circle {
            height: 40px;
            width: 40px;
            border-radius: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            border-radius: 0.75rem;
            overflow: hidden;
            transition: all 0.2s;
        }

        .form-control,
        .input-group-text {
            border-radius: 0.5rem;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
            border-color: #bac8f3;
        }

        .border-left-danger {
            border-left: 0.25rem solid #e74a3b !important;
        }

        .alert-icon {
            margin-right: 1rem;
            font-size: 1.25rem;
            color: #e74a3b;
        }

        .btn {
            border-radius: 0.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: all 0.2s;
        }

        .btn-primary {
            background: linear-gradient(135deg, #4e73df 0%, #224abe 100%);
            border: none;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 115, 223, 0.4);
        }

        .btn-light:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            // Add subtle animation when form loads
            $('.card').hide().fadeIn(800);

            // Form validation enhancements
            $('#formTambahSiswa').on('submit', function(e) {
                let isValid = true;

                $(this).find('input, select, textarea').each(function() {
                    if ($(this).prop('required') && !$(this).val()) {
                        isValid = false;
                        $(this).addClass('is-invalid').parent().append(
                            '<div class="invalid-feedback">Field ini harus diisi</div>'
                        );
                    } else {
                        $(this).removeClass('is-invalid').addClass('is-valid');
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    return false;
                }
            });

            // Clear validation styling on input
            $('input, select, textarea').on('focus', function() {
                $(this).removeClass('is-invalid');
                $(this).parent().find('.invalid-feedback').remove();
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/data-siswa/kelas-12/create-data-kelas-12.blade.php ENDPATH**/ ?>