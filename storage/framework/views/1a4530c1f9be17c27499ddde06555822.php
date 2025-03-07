<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="<?php echo e(asset('auth/css/bootstrap-login-form.min.css')); ?>" />
</head>

<body>
    <!-- Start your project here-->

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="POST" action="<?php echo e(route('calon_siswa.store')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0" style="font-size: 24px;">MA NU LUTHFUL ULUM</p>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example1" name="name" class="form-control form-control-lg"
                                placeholder="Enter your name" required />
                            <label class="form-label" for="form3Example1">Full Name</label>
                        </div>

                        <!-- Nomor Induk Kependudukan input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" name="nik" class="form-control form-control-lg"
                                placeholder="Masukkan NIK yang valid" required minlength="16" maxlength="16"
                                pattern="\d{16}" />
                            <label class="form-label" for="form3Example3">Nomor Induk Kependudukan (NIK)</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example2" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" required />
                            <label class="form-label" for="form3Example2">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example3" name="password"
                                class="form-control form-control-lg" placeholder="Enter password" required />
                            <label class="form-label" for="form3Example3">Password</label>
                        </div>

                        <!-- Confirm Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" name="password_confirmation"
                                class="form-control form-control-lg" placeholder="Confirm your password" required />
                            <label class="form-label" for="form3Example4">Confirm Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="form2Example4" />
                                <label class="form-check-label" for="form2Example4">
                                    I agree to the terms and conditions
                                </label>
                            </div>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a
                                    href="<?php echo e(route('login')); ?>" class="link-danger">Login</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End your project here-->

    <script type="text/javascript" src="<?php echo e(asset('auth/js/mdb.min.js')); ?>"></script>

    <script type="text/javascript"></script>
</body>

</html>
<?php /**PATH E:\PROJECT WEB SKRIPSI\PPDB_MA_NU_LU\resources\views/backend/admin/login-siswa/register_siswa.blade.php ENDPATH**/ ?>