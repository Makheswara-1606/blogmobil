<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <title>Register - OTOBLOG</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    :root {
        --primary-color: #BA181B;
        --dark-color: #000000;
        --light-color: #ffffff;
        --gray-color: #f8f9fa;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Open Sans", sans-serif;
        overflow-x: hidden;
        line-height: 1.6;
        background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.75)), url('https://wsa-website-assets.s3.amazonaws.com/assets/images/iconiccars.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Poppins", sans-serif;
        font-weight: 600;
    }

    /* Register Container */
    .register-container {
        background-color: white;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        overflow: hidden;
        max-width: 1000px;
        width: 100%;
        display: flex;
        animation: fadeInUp 0.6s ease;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Left Side - Branding */
    .register-brand {
        background: linear-gradient(135deg, var(--primary-color) 0%, #9a0e12 100%);
        padding: 60px 50px;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 45%;
    }

    .brand-logo {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        font-family: "Poppins", sans-serif;
    }

    .brand-logo span {
        color: var(--dark-color);
    }

    .brand-tagline {
        font-size: 1.1rem;
        line-height: 1.7;
        margin-bottom: 30px;
        color: rgba(255, 255, 255, 0.9);
    }

    .brand-features {
        list-style: none;
        padding: 0;
    }

    .brand-features li {
        margin-bottom: 15px;
        padding-left: 30px;
        position: relative;
        font-size: 0.95rem;
    }

    .brand-features li:before {
        content: '✓';
        position: absolute;
        left: 0;
        color: white;
        font-weight: bold;
        font-size: 1.2rem;
    }

    /* Right Side - Form */
    .register-form-container {
        padding: 60px 50px;
        width: 55%;
        max-height: 90vh;
        overflow-y: auto;
    }

    /* Custom Scrollbar */
    .register-form-container::-webkit-scrollbar {
        width: 8px;
    }

    .register-form-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .register-form-container::-webkit-scrollbar-thumb {
        background: var(--primary-color);
        border-radius: 10px;
    }

    .register-form-container::-webkit-scrollbar-thumb:hover {
        background: #9a0e12;
    }

    .register-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 10px;
        font-family: "Poppins", sans-serif;
    }

    .register-subtitle {
        color: #6c757d;
        margin-bottom: 35px;
        font-size: 0.95rem;
    }

    /* Form Groups */
    .form-group {
        margin-bottom: 25px;
    }

    .form-label {
        display: block;
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 8px;
        font-size: 0.95rem;
    }

    .form-control {
        width: 100%;
        padding: 12px 16px;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        font-family: "Open Sans", sans-serif;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(186, 24, 27, 0.1);
    }

    .form-control.error {
        border-color: #dc3545;
    }

    /* Error Messages */
    .error-message {
        color: #dc3545;
        font-size: 0.85rem;
        margin-top: 6px;
        display: block;
    }

    /* Password Strength Indicator */
    .password-hint {
        font-size: 0.8rem;
        color: #6c757d;
        margin-top: 6px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .password-hint i {
        font-size: 0.75rem;
    }

    /* Buttons */
    .btn-primary-custom {
        background-color: var(--primary-color);
        border: none;
        color: white;
        padding: 13px 32px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
        font-size: 0.95rem;
        width: 100%;
        cursor: pointer;
        font-family: "Poppins", sans-serif;
    }

    .btn-primary-custom:hover {
        background-color: #9a0e12;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(186, 24, 27, 0.3);
    }

    /* Links */
    .form-footer {
        text-align: center;
        margin-top: 25px;
    }

    .form-link {
        color: var(--primary-color);
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .form-link:hover {
        color: #9a0e12;
        text-decoration: underline;
    }

    .login-prompt {
        text-align: center;
        margin-top: 30px;
        padding-top: 30px;
        border-top: 1px solid #e0e0e0;
        color: #6c757d;
        font-size: 0.9rem;
    }

    .login-prompt a {
        color: var(--primary-color);
        font-weight: 600;
        text-decoration: none;
    }

    .login-prompt a:hover {
        text-decoration: underline;
    }

    /* Back to Home */
    .back-home {
        position: fixed;
        top: 30px;
        left: 30px;
        z-index: 1000;
    }

    .back-home-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background-color: rgba(255, 255, 255, 0.95);
        color: var(--dark-color);
        padding: 10px 20px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .back-home-link:hover {
        background-color: white;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        color: var(--primary-color);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .register-container {
            flex-direction: column;
        }

        .register-brand,
        .register-form-container {
            width: 100%;
        }

        .register-brand {
            padding: 40px 30px;
        }

        .register-form-container {
            padding: 40px 30px;
            max-height: none;
        }

        .brand-logo {
            font-size: 2rem;
        }

        .register-title {
            font-size: 1.75rem;
        }

        .back-home {
            top: 20px;
            left: 20px;
        }
    }

    @media (max-width: 576px) {
        body {
            padding: 10px;
        }

        .register-brand {
            padding: 30px 25px;
        }

        .register-form-container {
            padding: 30px 25px;
        }

        .brand-logo {
            font-size: 1.75rem;
        }

        .register-title {
            font-size: 1.5rem;
        }

        .back-home-link {
            padding: 8px 16px;
            font-size: 0.85rem;
        }

        .form-group {
            margin-bottom: 20px;
        }
    }
</style>

<body>
    <!-- Back to Home Button -->
    <div class="back-home">
        <a href="{{ route('welcome') }}" class="back-home-link">
            <i class="bi bi-arrow-left"></i>
            Kembali ke Home
        </a>
    </div>

    <!-- Register Container -->
    <div class="register-container">
        <!-- Left Side - Branding -->
        <div class="register-brand">
            <h1 class="brand-logo">OTO<span>BLOG</span></h1>
            <p class="brand-tagline">
                Bergabunglah dengan komunitas otomotif terbesar! Dapatkan akses ke ribuan artikel berkualitas.
            </p>
            <ul class="brand-features">
                <li>Baca artikel eksklusif gratis</li>
                <li>Simpan dan bagikan artikel favorit</li>
                <li>Ikuti blogger otomotif terbaik</li>
                <li>Berikan komentar dan diskusi</li>
                <li>Dapatkan notifikasi artikel terbaru</li>
            </ul>
        </div>

        <!-- Right Side - Register Form -->
        <div class="register-form-container">
            <h2 class="register-title">Daftar Akun</h2>
            <p class="register-subtitle">Buat akun baru untuk memulai perjalanan otomotif Anda</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input 
                        id="name" 
                        class="form-control @error('name') error @enderror" 
                        type="text" 
                        name="name" 
                        value="{{ old('name') }}" 
                        required 
                        autofocus 
                        autocomplete="name"
                        placeholder="Masukkan nama lengkap Anda"
                    />
                    @error('name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input 
                        id="email" 
                        class="form-control @error('email') error @enderror" 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autocomplete="username"
                        placeholder="Masukkan email Anda"
                    />
                    @error('email')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input 
                        id="password" 
                        class="form-control @error('password') error @enderror" 
                        type="password" 
                        name="password" 
                        required 
                        autocomplete="new-password"
                        placeholder="Buat password yang kuat"
                    />
                    <span class="password-hint">
                        <i class="bi bi-info-circle"></i>
                        Minimal 8 karakter
                    </span>
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input 
                        id="password_confirmation" 
                        class="form-control @error('password_confirmation') error @enderror" 
                        type="password" 
                        name="password_confirmation" 
                        required 
                        autocomplete="new-password"
                        placeholder="Ulangi password Anda"
                    />
                    @error('password_confirmation')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-primary-custom">
                    Daftar Sekarang
                </button>

                <!-- Login Prompt -->
                <div class="login-prompt">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}">Login di sini</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Password visibility toggle (optional enhancement)
        document.addEventListener('DOMContentLoaded', function() {
            // Add real-time password match validation
            const password = document.getElementById('password');
            const passwordConfirmation = document.getElementById('password_confirmation');
            
            if (password && passwordConfirmation) {
                passwordConfirmation.addEventListener('input', function() {
                    if (this.value && password.value !== this.value) {
                        this.classList.add('error');
                    } else {
                        this.classList.remove('error');
                    }
                });
            }
        });
    </script>
</body>

</html>