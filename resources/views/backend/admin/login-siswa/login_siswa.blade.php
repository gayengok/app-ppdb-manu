<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>MA NU LUTHFUL ULUM</title>
    <link rel="icon" href="{{ asset('auth/img/Logo-MA.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap-login-form.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                    <form method="POST" action="{{ route('login_siswa.login') }}">
                        @csrf

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0" style="font-size: 24px;">MA NU LUTHFUL ULUM</p>
                        </div>

                        <!-- Nomor Induk Kependudukan input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" name="nik" class="form-control form-control-lg"
                                placeholder="Masukkan NIK yang valid" required minlength="16" maxlength="16"
                                pattern="\d{16}" />
                            <label class="form-label" for="form3Example3">Nomor Induk Kependudukan (NIK)</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3 position-relative">
                            <input type="password" id="form3Example4" name="password"
                                class="form-control form-control-lg" placeholder="Enter password" required />
                            <label class="form-label" for="form3Example4">Password</label>

                            <!-- Button to toggle visibility -->
                            <i id="toggleIcon" class="fas fa-eye position-absolute"
                                style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"
                                onclick="togglePasswordVisibility()"></i>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="rememberMeCheckbox" onchange="toggleLoginButton()" />
                                <label class="form-check-label" for="rememberMeCheckbox">
                                    Remember me
                                </label>
                            </div>
                            <a href="#" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" id="loginButton" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;" disabled>Login</button>
                            </div>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                    href="{{ route('register_siswa.index') }}" class="link-danger">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End your project here-->

    <script type="text/javascript" src="{{ asset('auth/js/mdb.min.js') }}"></script>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('form3Example4');
            const toggleIcon = document.getElementById('toggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        function toggleLoginButton() {
            const checkbox = document.getElementById('rememberMeCheckbox');
            const loginButton = document.getElementById('loginButton');
            loginButton.disabled = !checkbox.checked;
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success'))
                Swal.fire({
                    title: 'Login Berhasil!',
                    text: 'Selamat datang di Dashboard!',
                    icon: 'success',
                    iconColor: '#28A745',
                    background: '#ffffff',
                    color: '#333',
                    confirmButtonText: 'Masuk Dashboard',
                    confirmButtonColor: '#28A745',
                    showClass: {
                        popup: ''
                    },
                    hideClass: {
                        popup: ''
                    },
                    backdrop: `
                    rgba(0, 0, 0, 0.3)
                `
                });
            @endif

            @if (session('error'))
                Swal.fire({
                    title: 'Login Gagal!',
                    text: 'Email atau Password salah.',
                    icon: 'error',
                    iconColor: '#DC3545',
                    background: '#ffffff',
                    color: '#333',
                    confirmButtonText: 'Coba Lagi',
                    confirmButtonColor: '#DC3545',
                    showClass: {
                        popup: ''
                    },
                    hideClass: {
                        popup: ''
                    },
                    backdrop: `
                    rgba(0, 0, 0, 0.3)
                `
                });
            @endif
        });
    </script>
</body>

</html>
