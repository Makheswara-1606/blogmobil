<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Kontak | OTOBLOG</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary-color: #BA181B;
        --secondary-color: #ffffff;
        --text-dark: #333333;
        --text-light: #6c757d;
        --bg-light: #f8f9fa;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        background-color: #f5f5f5;
        color: var(--text-dark);
        margin: 0;
        padding: 0;
        line-height: 1.6;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Poppins', sans-serif;
    }

    /* Navigation Base */
    .navbar {
        background-color: var(--primary-color);
        padding: 18px 0;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .navbar .container-fluid {
        padding: 10px 30px;
        margin: 0;
        max-width: 100%;
    }

    .navbar-brand {
        font-size: 28px;
        font-weight: 700;
        color: white;
        letter-spacing: 1px;
        margin: 0;
    }

    .navbar-brand span {
        color: white;
    }

    .navbar-nav {
        margin-left: auto;
        margin-right: auto;
    }

    .navbar-nav .nav-link {
        color: white;
        font-weight: 500;
        margin: 0 15px;
        padding: 8px 0;
        position: relative;
        transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover {
        color: var(--dark-color, #000000);
    }

    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--dark-color, #000000);
        transition: width 0.3s ease;
    }

    .navbar-nav .nav-link:hover::after {
        width: 100%;
    }

    .navbar-toggler {
        border: 2px solid white;
        padding: 8px 12px;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .navbar-toggler:focus {
        box-shadow: none;
        border-color: white;
    }

    /* User Dropdown */
    .user-dropdown .dropdown-toggle::after {
        display: none;
    }

    .user-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: white;
        color: var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 10px;
        border: 2px solid white;
        box-shadow: 0 0 6px rgba(255, 255, 255, 0.5);
        overflow: hidden;
    }

    .user-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .dropdown-menu {
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        border: none;
        margin-top: 8px;
    }

    .dropdown-menu li a {
        color: black;
        padding: 10px 20px;
        transition: all 0.3s ease;
    }

    .dropdown-menu li a:hover {
        background-color: var(--bg-light, #f8f9fa);
        color: var(--primary-color);
    }

    .dropdown-divider {
        margin: 0.5rem 0;
    }

    /* Navbar Scroll Effect */
    .navbar.scrolled {
        padding: 12px 0;
    }

    /* Judul Section */
    .judul {
        text-align: center;
        padding: 60px 20px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 0 0 30px 30px;
        position: relative;
        overflow: hidden;
    }

    .judul::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), #000, var(--primary-color));
    }

    .judul h1 {
        font-weight: 800;
        font-size: 2.8rem;
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
    }

    .judul h1 span {
        color: var(--primary-color);
        position: relative;
        display: inline-block;
    }

    .judul h1 span::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 100%;
        height: 3px;
        background-color: var(--primary-color);
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.4s ease;
    }

    .judul h1:hover span::after {
        transform: scaleX(1);
        transform-origin: left;
    }

    .judul p {
        color: var(--text-light);
        font-size: 1.2rem;
        max-width: 600px;
        margin: 0 auto 30px;
    }

    /* Contact Section */
    .contact-section {
        padding: 80px 0 50px;
    }

    .contact-card {
        background: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: none;
    }

    .contact-info-card {
        background: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border: none;
        height: 100%;
    }

    .btn-custom {
        background-color: var(--primary-color);
        color: #fff;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-custom:hover {
        background-color: #a11215;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(186, 24, 27, 0.3);
    }

    .form-control {
        padding: 12px 15px;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.2rem rgba(186, 24, 27, 0.25);
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .contact-item:hover {
        background-color: #e9ecef;
        transform: translateX(5px);
    }

    .contact-icon {
        width: 50px;
        height: 50px;
        background-color: var(--primary-color);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 1.2rem;
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .social-link {
        width: 45px;
        height: 45px;
        background-color: #f8f9fa;
        color: var(--primary-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 1.2rem;
    }

    .social-link:hover {
        background-color: var(--primary-color);
        color: white;
        transform: translateY(-3px);
    }

    /* Alert Styles */
    .alert {
        border-radius: 10px;
        border: none;
        padding: 15px 20px;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border-left: 4px solid #28a745;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border-left: 4px solid #dc3545;
    }

    /* Footer */
    footer {
        background-color: black;
        color: white;
        padding: 40px 0 20px;
        margin-top: 70px;
    }

    footer h5 {
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
        margin-bottom: 20px;
    }

    footer a {
        color: white;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    footer a:hover {
        color: var(--primary-color);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .navbar .container-fluid {
            padding: 10px 15px;
        }

        .judul h1 {
            font-size: 2.2rem;
        }

        .judul p {
            font-size: 1rem;
        }

        .contact-card,
        .contact-info-card {
            padding: 25px;
        }

        .contact-section {
            padding: 50px 0 30px;
        }
    }

    @media (max-width: 576px) {
        .judul h1 {
            font-size: 1.8rem;
        }

        .contact-card,
        .contact-info-card {
            padding: 20px;
        }
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color:#BA181B;">
        <div class="container-fluid">
            <h1 class="navbar-brand">OTO<span>BLOG</span></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left: 20rem">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('artikel') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak Kami</a>
                    </li>
                </ul>
            </div>

            <div class="text-center">
                <div class="user-dropdown dropdown">
                    @php
                    $user = Auth::user();
                    @endphp
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- Foto Profile atau Avatar -->
                        <div class="user-avatar" style="
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
    border: 2px solid white; 
    box-shadow: 0 0 6px rgba(255,255,255,0.5); 
">
                            @if($user->hasProfilePhoto())
                            <img src="{{ $user->photo_url }}" alt="Profile Photo" style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                            <div style="
        width: 100%;
        height: 100%;
        background-color: white;
        color: var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
        border-radius: 50%;
    ">
                                {{ $user->initial }}
                            </div>
                            @endif
                        </div>


                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="{{ route('halamanProfile') }}">
                                <i class="bi bi-person me-2"></i>Profil Saya
                            </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout/Keluar</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <!-- Judul Section -->
    <section class="judul">
        <div class="container-fluid" style="max-width: 800px;">
            <h1>Hubungi <span>Kami</span></h1>
            <p>Jangan ragu untuk menghubungi kami jika ada pertanyaan atau masukan</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <!-- Alert Messages -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="row g-4">
                <!-- Form Kontak -->
                <div class="col-lg-7">
                    <div class="contact-card">
                        <h3 class="mb-4" style="color: var(--primary-color);">Kirim Pesan</h3>
                        <form method="POST" action="{{ route('kontak.kirim') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap Anda" value="{{ old('nama') }}" required>
                                @error('nama')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Alamat Email</label>
                                <input type="email" name="email" class="form-control" placeholder="nama@email.com" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Pesan Anda</label>
                                <textarea name="pesan" class="form-control" rows="6" placeholder="Tulis pesan Anda di sini..." required>{{ old('pesan') }}</textarea>
                                @error('pesan')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-custom">
                                <i class="bi bi-send-fill me-2"></i>Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Info Kontak -->
                <div class="col-lg-5">
                    <div class="contact-info-card">
                        <h3 class="mb-4" style="color: var(--primary-color);">Informasi Kontak</h3>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Alamat</h6>
                                <p class="mb-0">Depok, Jawa Barat, Indonesia</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Email</h6>
                                <p class="mb-0">otoblog@example.com</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-phone-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Telepon</h6>
                                <p class="mb-0">+62 812 3456 7890</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Jam Operasional</h6>
                                <p class="mb-0">Senin - Jumat: 09:00 - 17:00</p>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h6 class="fw-bold mb-3">Ikuti Kami</h6>
                        <div class="social-links">
                            <a href="#" class="social-link">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <div class="col-md-4 col-lg-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold">OTOBLOG</h5>
                    <p class="mb-4">Tempat berbagi artikel, pengalaman, dan opini tentang dunia otomotif.</p>
                </div>
                <div class="col-md-3 col-lg-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold">Links</h5>
                    <p><a href="{{ route('dashboard') }}">Home</a></p>
                    <p><a href="{{ route('artikel') }}">Artikel</a></p>
                    <p><a href="{{ route('tentang') }}">Tentang</a></p>
                    <p><a href="{{ route('kontak') }}">Kontak</a></p>
                </div>
                <div class="col-md-4 col-lg-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold">Kontak</h5>
                    <p><i class="bi bi-house-door me-2"></i>Depok, Indonesia</p>
                    <p><i class="bi bi-envelope me-2"></i>otoblog@example.com</p>
                    <p><i class="bi bi-phone me-2"></i>+62 812 3456 7890</p>
                </div>
            </div>
            <hr class="mb-4" style="border-color: #444;">
            <div class="text-center">
                <p class="mb-0">© 2025 OTOBLOG. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        // Auto-hide alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 5000);
            });

            // Set active navigation
            const currentPage = window.location.pathname;
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPage) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });
    </script>
</body>

</html>