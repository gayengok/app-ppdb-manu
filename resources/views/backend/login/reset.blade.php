<!DOCTYPE html>
<html lang="en">

{{-- <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Forgot Password</title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('auth/css/bootstrap-login-form.min.css') }}" />

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
                    <form method="POST" action="#">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                placeholder="Enter your email address" required />
                            <label class="form-label" for="email">Email address</label>
                        </div>

                        <!-- Error handling -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg">Send Password Reset Link</button>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <p class="small fw-bold mt-2 pt-1 mb-0">Remembered your password? <a
                                    href="{{ route('login') }}" class="link-danger">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End your project here-->

    <script type="text/javascript" src="{{ asset('auth/js/mdb.min.js') }}"></script>

    <script type="text/javascript"></script>
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
</body>

</html> --}}
