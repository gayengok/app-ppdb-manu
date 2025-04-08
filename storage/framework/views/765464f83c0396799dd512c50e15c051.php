

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-0">
                        <!-- Header dengan gradient background -->
                        <div class="card-header bg-gradient-primary text-white p-4 rounded-top">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle bg-white text-primary mr-3">
                                    <i class="fas fa-user-edit fa-lg"></i>
                                </div>
                                <div>
                                    <h4 class="card-title mb-0 font-weight-bold">Edit Data Siswa Kelas 11</h4>
                                    <p class="mb-0 opacity-8">Perbarui informasi profil siswa</p>
                                </div>
                            </div>
                        </div>

                        <!-- Alert error handling dengan desain yang lebih baik -->
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                                <div class="d-flex">
                                    <div class="mr-3">
                                        <i class="fas fa-exclamation-triangle fa-2x"></i>
                                    </div>
                                    <div>
                                        <h5 class="alert-heading">Terdapat kesalahan!</h5>
                                        <ul class="mb-0 pl-3">
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <div class="card-body p-4">
                            <form action="<?php echo e(route('kelas-11.update', $kelasSebelas->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="row">
                                    <!-- NISN -->
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="nisn"
                                                class="form-label font-weight-bold text-uppercase text-muted">
                                                <i class="fas fa-id-card mr-2"></i>NISN
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light border-right-0">
                                                        <i class="fas fa-fingerprint text-primary"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control border-left-0 bg-light"
                                                    id="nisn" name="nisn" value="<?php echo e($kelasSebelas->nisn); ?>" required
                                                    placeholder="Masukkan NISN">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Nama Lengkap -->
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="full_name"
                                                class="form-label font-weight-bold text-uppercase text-muted">
                                                <i class="fas fa-user mr-2"></i>Nama Lengkap
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light border-right-0">
                                                        <i class="fas fa-user-circle text-primary"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control border-left-0 bg-light"
                                                    id="full_name" name="full_name" value="<?php echo e($kelasSebelas->full_name); ?>"
                                                    required placeholder="Masukkan nama lengkap">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Jenis Kelamin -->
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="gender"
                                                class="form-label font-weight-bold text-uppercase text-muted">
                                                <i class="fas fa-venus-mars mr-2"></i>Jenis Kelamin
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light border-right-0">
                                                        <i class="fas fa-venus-mars text-primary"></i>
                                                    </span>
                                                </div>
                                                <select class="form-control border-left-0 bg-light custom-select"
                                                    id="gender" name="gender" required>
                                                    <option value="Laki-laki"
                                                        <?php echo e($kelasSebelas->gender == 'Laki-laki' ? 'selected' : ''); ?>>
                                                        Laki-laki
                                                    </option>
                                                    <option value="Perempuan"
                                                        <?php echo e($kelasSebelas->gender == 'Perempuan' ? 'selected' : ''); ?>>
                                                        Perempuan
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Status -->
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="status"
                                                class="form-label font-weight-bold text-uppercase text-muted">
                                                <i class="fas fa-toggle-on mr-2"></i>Status
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light border-right-0">
                                                        <i class="fas fa-check-circle text-primary"></i>
                                                    </span>
                                                </div>
                                                <select class="form-control border-left-0 bg-light custom-select"
                                                    id="status" name="status" required>
                                                    <option value="Aktif"
                                                        <?php echo e($kelasSebelas->status == 'Aktif' ? 'selected' : ''); ?>>
                                                        Aktif
                                                    </option>
                                                    <option value="Tidak Aktif"
                                                        <?php echo e($kelasSebelas->status == 'Tidak Aktif' ? 'selected' : ''); ?>>
                                                        Tidak Aktif
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Alamat -->
                                    <div class="col-md-12">
                                        <div class="form-group mb-4">
                                            <label for="address"
                                                class="form-label font-weight-bold text-uppercase text-muted">
                                                <i class="fas fa-map-marker-alt mr-2"></i>Alamat
                                            </label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-light border-right-0">
                                                        <i class="fas fa-home text-primary"></i>
                                                    </span>
                                                </div>
                                                <textarea class="form-control border-left-0 bg-light" id="address" name="address" required rows="3"
                                                    placeholder="Masukkan alamat lengkap"><?php echo e($kelasSebelas->address); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="separator-line my-4"></div>

                                <!-- Tombol aksi -->
                                <div class="d-flex justify-content-between">
                                    <a href="<?php echo e(route('kelas-11.index')); ?>" class="btn btn-outline-secondary btn-lg">
                                        <i class="fa fa-arrow-left mr-2"></i> Kembali
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-lg px-5">
                                        <i class="fas fa-save mr-2"></i> Simpan Perubahan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Informasi Tambahan Card -->
                    <div class="card shadow-sm border-0 mt-4">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle bg-info text-white mr-3">
                                    <i class="fas fa-info"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Informasi Pembaruan Data</h6>
                                    <p class="mb-0 text-muted small">Perubahan data akan langsung terlihat pada database
                                        sekolah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Custom styles for premium look */
        .bg-gradient-primary {
            background: linear-gradient(135deg, #3a7bd5 0%, #2b5876 100%) !important;
        }

        .icon-circle {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .separator-line {
            height: 1px;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.05), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.05));
        }

        .form-control,
        .input-group-text {
            border-radius: 0.5rem;
        }

        .input-group .form-control {
            height: 45px;
        }

        textarea.form-control {
            min-height: 100px;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(58, 123, 213, 0.15);
            border-color: #3a7bd5;
        }

        .btn-primary {
            background: linear-gradient(135deg, #3a7bd5 0%, #2b5876 100%);
            border: none;
            box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
        }

        .btn-outline-secondary {
            border-color: #ddd;
            color: #666;
        }

        .btn-outline-secondary:hover {
            background-color: #f8f9fa;
            color: #333;
        }

        .btn {
            border-radius: 0.5rem;
            padding: 0.6rem 1.5rem;
        }

        .card {
            border-radius: 0.75rem;
            overflow: hidden;
        }

        .card-header {
            border-bottom: none;
        }

        .opacity-8 {
            opacity: 0.8;
        }

        .custom-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e");
            background-position: right 0.75rem center;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.dashboard.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/data-siswa/kelas-11/edit-data-kelas-11.blade.php ENDPATH**/ ?>