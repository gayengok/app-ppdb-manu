<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Register - MA NU LUTHFUL ULUM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            /* background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 0;
        }

        .register-container {
            width: 85%;
            max-width: 1200px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            display: flex;
            overflow: hidden;
            position: relative;
        }

        .left-side {
            width: 50%;
            padding: 0;
            position: relative;
            overflow: hidden;
        }

        .left-side img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            transition: transform 0.5s;
        }

        .left-side::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(76, 175, 80, 0.8) 0%, rgba(33, 150, 243, 0.8) 100%);
            opacity: 0.7;
        }

        .school-info {
            position: absolute;
            bottom: 50px;
            left: 40px;
            color: white;
            z-index: 10;
        }

        .school-info h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .school-info p {
            font-size: 16px;
            max-width: 80%;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .right-side {
            width: 50%;
            padding: 40px 50px;
            display: flex;
            flex-direction: column;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .logo-placeholder {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #4CAF50, #2196F3);
            border-radius: 10px;
            margin-right: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        .school-name {
            font-size: 22px;
            font-weight: 700;
            color: #333;
        }

        .welcome-text {
            margin-bottom: 30px;
        }

        .welcome-text h1 {
            font-size: 26px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .welcome-text p {
            font-size: 14px;
            color: #666;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #666;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s;
            background-color: #f9f9f9;
        }

        .input-with-icon input:focus {
            border-color: #2196F3;
            box-shadow: 0 0 0 2px rgba(33, 150, 243, 0.2);
            outline: none;
            background-color: #fff;
        }

        .input-with-icon .icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .input-with-icon .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            cursor: pointer;
        }

        .form-check {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .form-check input {
            width: 18px;
            height: 18px;
            margin-right: 10px;
            margin-top: 2px;
            accent-color: #2196F3;
        }

        .form-check label {
            font-size: 14px;
            color: #666;
            line-height: 1.4;
        }

        .register-button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #4CAF50, #2196F3);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(33, 150, 243, 0.3);
        }

        .register-button:hover {
            background: linear-gradient(135deg, #43A047, #1E88E5);
            box-shadow: 0 6px 10px rgba(33, 150, 243, 0.4);
        }

        .login-link {
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .login-link a {
            color: #2196F3;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s;
        }

        .login-link a:hover {
            color: #0d47a1;
            text-decoration: underline;
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-text,
        .form-group,
        .form-check,
        .register-button,
        .login-link {
            animation: fadeIn 0.5s ease-out forwards;
        }

        .welcome-text {
            animation-delay: 0.1s;
        }

        .form-group:nth-child(1) {
            animation-delay: 0.15s;
        }

        .form-group:nth-child(2) {
            animation-delay: 0.2s;
        }

        .form-group:nth-child(3) {
            animation-delay: 0.25s;
        }

        .form-group:nth-child(4) {
            animation-delay: 0.3s;
        }

        .form-group:nth-child(5) {
            animation-delay: 0.35s;
        }

        .form-check {
            animation-delay: 0.4s;
        }

        .register-button {
            animation-delay: 0.45s;
        }

        .login-link {
            animation-delay: 0.5s;
        }

        /* Password strength indicator */
        .password-strength {
            height: 5px;
            margin-top: 8px;
            border-radius: 5px;
            display: none;
            transition: all 0.3s;
        }

        .weak {
            background: linear-gradient(to right, #ff5252, #ff5252);
            width: 30%;
            display: block;
        }

        .medium {
            background: linear-gradient(to right, #ffd740, #ffd740);
            width: 60%;
            display: block;
        }

        .strong {
            background: linear-gradient(to right, #4CAF50, #4CAF50);
            width: 100%;
            display: block;
        }

        .password-info {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
            display: none;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .register-container {
                width: 90%;
                flex-direction: column;
            }

            .left-side,
            .right-side {
                width: 100%;
            }

            .left-side {
                height: 200px;
            }

            .school-info {
                bottom: 20px;
                left: 20px;
            }

            .school-info h2 {
                font-size: 22px;
            }

            .school-info p {
                font-size: 14px;
            }

            .right-side {
                padding: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="left-side">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                alt="School Image">
            <div class="school-info">
                <h2>MA NU LUTHFUL ULUM</h2>
                <p>Pendidikan berkualitas berbasis nilai-nilai Islam dan keunggulan akademik</p>
            </div>
        </div>
        <div class="right-side">
            <div class="logo-container">
                <div class="logo-placeholder">MA</div>
                <div class="school-name">MA NU LUTHFUL ULUM</div>
            </div>
            <div class="welcome-text">
                <h1>Buat Akun Baru</h1>
                <p>Isi formulir di bawah ini untuk mendaftar sebagai calon siswa</p>
            </div>
            <form id="registerForm" method="POST" action="{{ route('calon_siswa.store') }}">
                @csrf
                <div class="form-group">
                    <label for="fullName">Nama Lengkap</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user icon"></i>
                        <input type="text" id="fullName" name="name" placeholder="Masukkan nama lengkap Anda"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nisn">Nomor Induk Siswa Nasional (NISN)</label>
                    <div class="input-with-icon">
                        <i class="fas fa-id-card icon"></i>
                        <input type="text" id="nisn" name="nisn" placeholder="Masukkan 10 digit NISN Anda"
                            required minlength="10" maxlength="10" oninput="this.value = this.value.slice(0, 10)">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope icon"></i>
                        <input type="email" id="email" name="email" placeholder="Masukkan alamat email Anda"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock icon"></i>
                        <input type="password" id="password" name="password" placeholder="Buat password Anda" required
                            onkeyup="checkPasswordStrength()">
                        <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                    </div>
                    <div class="password-strength" id="passwordStrength"></div>
                    <div class="password-info" id="passwordInfo">Password harus memiliki minimal 8 karakter</div>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Konfirmasi Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock icon"></i>
                        <input type="password" id="confirmPassword" name="password_confirmation"
                            placeholder="Konfirmasi password Anda" required onkeyup="checkPasswordMatch()">
                        <i class="fas fa-eye toggle-password" id="toggleConfirmPassword"></i>
                    </div>
                    <small id="passwordMatchInfo"
                        style="color: #666; font-size: 12px; display: none; margin-top: 5px;"></small>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="termsCheckbox" name="terms" required>
                    <label for="termsCheckbox">Saya menyetujui semua <a href="#" style="color: #2196F3;">syarat
                            dan ketentuan</a> serta <a href="#" style="color: #2196F3;">kebijakan
                            privasi</a></label>
                </div>
                <button type="submit" class="register-button">Daftar Sekarang</button>
                <p class="login-link">Sudah memiliki akun? <a href="{{ route('login_siswa') }}">Masuk</a></p>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.12/sweetalert2.min.js"></script>
    <script>
        // Toggle password visibility for password field
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('togglePassword');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });

        // Toggle password visibility for confirm password field
        document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const toggleIcon = document.getElementById('toggleConfirmPassword');

            if (confirmPasswordInput.type === 'password') {
                confirmPasswordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                confirmPasswordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });

        // Check password strength
        function checkPasswordStrength() {
            const password = document.getElementById('password').value;
            const strengthBar = document.getElementById('passwordStrength');
            const passwordInfo = document.getElementById('passwordInfo');

            // Show password strength indicator and info when user starts typing
            if (password.length > 0) {
                strengthBar.style.display = 'block';
                passwordInfo.style.display = 'block';
            } else {
                strengthBar.style.display = 'none';
                passwordInfo.style.display = 'none';
                return;
            }

            // Calculate password strength
            let strength = 0;
            if (password.length >= 8) strength += 1;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength += 1;
            if (password.match(/\d/)) strength += 1;
            if (password.match(/[^a-zA-Z\d]/)) strength += 1;

            // Update the strength bar and info
            if (strength <= 2) {
                strengthBar.className = 'password-strength weak';
                passwordInfo.innerHTML = 'Password lemah - tambahkan huruf besar, angka, dan karakter khusus';
                passwordInfo.style.color = '#ff5252';
            } else if (strength === 3) {
                strengthBar.className = 'password-strength medium';
                passwordInfo.innerHTML = 'Password sedang - cukup baik tapi bisa ditingkatkan';
                passwordInfo.style.color = '#ffd740';
            } else {
                strengthBar.className = 'password-strength strong';
                passwordInfo.innerHTML = 'Password kuat - kombinasi yang sangat baik';
                passwordInfo.style.color = '#4CAF50';
            }
        }

        // Check if passwords match
        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const passwordMatchInfo = document.getElementById('passwordMatchInfo');

            if (confirmPassword.length > 0) {
                passwordMatchInfo.style.display = 'block';

                if (password === confirmPassword) {
                    passwordMatchInfo.innerHTML = 'Password cocok';
                    passwordMatchInfo.style.color = '#4CAF50';
                } else {
                    passwordMatchInfo.innerHTML = 'Password tidak cocok';
                    passwordMatchInfo.style.color = '#ff5252';
                }
            } else {
                passwordMatchInfo.style.display = 'none';
            }
        }

        // Form submission validation
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const termsCheckbox = document.getElementById('termsCheckbox');

            if (password !== confirmPassword) {
                event.preventDefault();
                Swal.fire({
                    title: 'Password Tidak Cocok!',
                    text: 'Pastikan password konfirmasi sama dengan password Anda.',
                    icon: 'error',
                    iconColor: '#F44336',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#2196F3'
                });
                return;
            }

            if (!termsCheckbox.checked) {
                event.preventDefault();
                Swal.fire({
                    title: 'Syarat dan Ketentuan',
                    text: 'Anda harus menyetujui syarat dan ketentuan untuk melanjutkan.',
                    icon: 'warning',
                    iconColor: '#FFC107',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#2196F3'
                });
                return;
            }
        });
    </script>
</body>

</html>
