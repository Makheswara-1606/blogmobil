<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Tentang Kami - OTOBLOG</title>
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
        --border-color: #e0e0e0;
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

    /* Main Content Styles */
    .about-container {
        max-width: 900px;
        margin: 40px auto;
        padding: 40px;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .about-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .about-header h1 {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 15px;
    }

    .about-header p {
        font-size: 1.2rem;
        color: var(--text-light);
    }

    .about-section {
        margin-bottom: 40px;
    }

    .about-section h2 {
        color: var(--primary-color);
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--border-color);
    }

    .about-section p {
        margin-bottom: 15px;
        text-align: justify;
        line-height: 1.8;
    }

    .roles-section {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin: 30px 0;
    }

    .role-card {
        flex: 1;
        min-width: 250px;
        background: var(--bg-light);
        padding: 25px;
        border-radius: 10px;
        border-left: 4px solid var(--primary-color);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .role-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .role-card h3 {
        color: var(--primary-color);
        margin-bottom: 10px;
        font-size: 1.3rem;
    }

    .rules-list {
        list-style-type: none;
        padding-left: 0;
    }

    .rules-list li {
        margin-bottom: 15px;
        padding-left: 30px;
        position: relative;
        line-height: 1.6;
    }

    .rules-list li:before {
        content: "✓";
        color: var(--primary-color);
        font-weight: bold;
        position: absolute;
        left: 0;
        font-size: 1.2rem;
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

    /* Contact Info */
    .contact-info {
        text-align: center;
        margin-top: 40px;
        padding: 30px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 10px;
    }

    .contact-info p {
        margin-bottom: 10px;
        font-size: 1.1rem;
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

        .about-container {
            padding: 25px;
            margin: 20px;
        }

        .roles-section {
            flex-direction: column;
        }

        .role-card {
            min-width: 100%;
        }
    }

    @media (max-width: 576px) {
        .judul h1 {
            font-size: 1.8rem;
        }

        .about-container {
            padding: 20px;
        }

        .about-header h1 {
            font-size: 2rem;
        }
    }
</style>

<body>
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
            <h1>Tentang <span>OTOBLOG</span></h1>
            <p>Kenali lebih dalam tentang platform berbagi informasi otomotif terpercaya</p>
        </div>
    </section>

    <!-- Main Content -->
    <div class="about-container">
        <div class="about-header">
            <h1># Jika kalian bertanya-tanya<br>Apa itu..</h1>
            <p><strong>OTOBLOG</strong></p>
        </div>

        <div class="about-section">
            <p>
                Otoblog adalah situs website blog yang di gunakan untuk membaca, berbagai pengalaman atau ilmu seputar dunia otomotif baik kendaraan roda empat mau pun roda dua.
            </p>
        </div>

        <div class="about-section">
            <h2>Peran dalam Website</h2>
            <p>Dalam website blog ini, terdapat 3 jenis peran yang ada:</p>

            <div class="roles-section">
                <div class="role-card">
                    <h3>User</h3>
                    <p>Pembaca yang akan menggunakan blog ini untuk membaca artikel dan konten yang tersedia.</p>
                </div>

                <div class="role-card">
                    <h3>Blogger</h3>
                    <p>Penulis yang akan memposting artikel untuk di baca oleh user dan berbagi pengetahuan.</p>
                </div>

                <div class="role-card">
                    <h3>Admin</h3>
                    <p>Yang akan menjaga dan meng-handle akun user ataupun blogger dalam website ini.</p>
                </div>
            </div>
        </div>

        <div class="about-section">
            <h2>Peraturan Website</h2>
            <p>Ada beberapa peraturan yang harus di pahami dalam website blog ini:</p>

            <ul class="rules-list">
                <li>Postingan tidak boleh mengandung unsur SARA</li>
                <li>Postingan tidak boleh mengandung pornografi</li>
                <li>Tetap menggunakan bahasa yang sopan</li>
                <li>Tidak melakukan terror atau ancaman</li>
                <li>Unggah lah postingan yang dapat menjadi topik artikel yang menarik perhatian public</li>
            </ul>
        </div>

        <div class="contact-info">
            <p><strong>OTOBLOG</strong></p>
            <p>©2025 Otoblog copyright</p>
            <p><strong>Contact Us</strong></p>
            <p>glimahe@gmail.com</p>
            @auth
            <p class="mt-3"><small>Halo, <strong>{{ Auth::user()->name }}</strong>! Terima kasih telah mengunjungi halaman tentang kami.</small></p>
            @else
            <p class="mt-3"><small><a href="{{ route('login') }}" style="color: var(--primary-color);">Login</a> untuk experience yang lebih baik.</small></p>
            @endauth
        </div>
    </div>

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
        // Script untuk menandai item navigasi aktif
        document.addEventListener('DOMContentLoaded', function() {
            const currentPage = window.location.pathname;
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPage) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });

            // Animasi untuk role cards
            const roleCards = document.querySelectorAll('.role-card');
            roleCards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.2}s`;
            });
        });
    </script>
</body>

</html>