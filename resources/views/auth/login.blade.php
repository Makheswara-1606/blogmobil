<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <title>Login - OTOBLOG</title>
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

    /* Login Container */
    .login-container {
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
    .login-brand {
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
    .login-form-container {
        padding: 60px 50px;
        width: 55%;
    }

    .login-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 10px;
        font-family: "Poppins", sans-serif;
    }

    .login-subtitle {
        color: #6c757d;
        margin-bottom: 35px;
        font-size: 0.95rem;
    }

    /* Session Status */
    .session-status {
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 0.9rem;
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

    /* Remember Me */
    .remember-container {
        display: flex;
        align-items: center;
        margin-bottom: 25px;
    }

    .remember-checkbox {
        width: 18px;
        height: 18px;
        margin-right: 8px;
        cursor: pointer;
        accent-color: var(--primary-color);
    }

    .remember-label {
        color: #6c757d;
        font-size: 0.9rem;
        cursor: pointer;
        user-select: none;
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
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 25px;
        flex-wrap: wrap;
        gap: 15px;
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

    .register-prompt {
        text-align: center;
        margin-top: 30px;
        padding-top: 30px;
        border-top: 1px solid #e0e0e0;
        color: #6c757d;
        font-size: 0.9rem;
    }

    .register-prompt a {
        color: var(--primary-color);
        font-weight: 600;
        text-decoration: none;
    }

    .register-prompt a:hover {
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
        .login-container {
            flex-direction: column;
        }

        .login-brand,
        .login-form-container {
            width: 100%;
        }

        .login-brand {
            padding: 40px 30px;
        }

        .login-form-container {
            padding: 40px 30px;
        }

        .brand-logo {
            font-size: 2rem;
        }

        .login-title {
            font-size: 1.75rem;
        }

        .back-home {
            top: 20px;
            left: 20px;
        }

        .form-footer {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 576px) {
        body {
            padding: 10px;
        }

        .login-brand {
            padding: 30px 25px;
        }

        .login-form-container {
            padding: 30px 25px;
        }

        .brand-logo {
            font-size: 1.75rem;
        }

        .login-title {
            font-size: 1.5rem;
        }

        .back-home-link {
            padding: 8px 16px;
            font-size: 0.85rem;
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

    <!-- Login Container -->
    <div class="login-container">
        <!-- Left Side - Branding -->
        <div class="login-brand">
            <h1 class="brand-logo">OTO<span>BLOG</span></h1>
            <p class="brand-tagline">
                Selamat datang kembali! Login untuk mengakses berbagai artikel menarik seputar dunia otomotif.
            </p>
            <ul class="brand-features">
                <li>Akses artikel eksklusif</li>
                <li>Simpan artikel favorit</li>
                <li>Ikuti blogger favorit</li>
                <li>Berikan komentar dan feedback</li>
            </ul>
        </div>

        <!-- Right Side - Login Form -->
        <div class="login-form-container">
            <h2 class="login-title">Login</h2>
            <p class="login-subtitle">Masuk ke akun Anda untuk melanjutkan</p>

            <!-- Session Status -->
            @if (session('status'))
                <div class="session-status">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

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
                        autofocus 
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
                        autocomplete="current-password"
                        placeholder="Masukkan password Anda"
                    />
                    @error('password')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="remember-container">
                    <input 
                        id="remember_me" 
                        type="checkbox" 
                        class="remember-checkbox" 
                        name="remember"
                    >
                    <label for="remember_me" class="remember-label">
                        Ingat saya
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-primary-custom">
                    Masuk
                </button>

                <!-- Form Footer Links -->
                <div class="form-footer">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="form-link">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <!-- Register Prompt -->
                <div class="register-prompt">
                    Belum punya akun? 
                    <a href="{{ route('register') }}">Daftar sekarang</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>