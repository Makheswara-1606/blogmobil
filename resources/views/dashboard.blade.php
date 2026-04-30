<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>OTO BLOG - Dashboard</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
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
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar styling */
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

        /* EFEK GARIS MERAH PADA USERNAME */
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

        .search-box {
            display: flex;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
            overflow: hidden;
            transition: all 0.3s ease;
            max-width: 600px;
            margin: 0 auto;
        }

        .search-box:hover {
            box-shadow: 0 8px 20px rgba(186, 24, 27, 0.15);
            transform: translateY(-2px);
        }

        .search-input {
            flex: 1;
            border: none;
            padding: 15px 25px;
            font-size: 1.1rem;
            outline: none;
            background: white;
        }

        .search-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-btn:hover {
            background-color: #9d1518;
        }

        /* Article Cards */
        .artikel {
            padding: 70px 20px;
        }

        /* ARTICLE CARD DENGAN JARAK YANG LEBIH RAPI */
        .article-card {
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            background-color: #ffffff;
            /* putih bersih */
            color: #333333;
            /* teks gelap */
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .article-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }


        /* Tambahkan margin bottom pada column untuk jarak antar card */
        .article-card-wrapper {
            margin-bottom: 40px;
        }

        .article-img {
            height: 220px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.3s ease;
        }

        .article-card:hover .article-img {
            transform: scale(1.05);
        }

        .article-body {
            padding: 25px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .article-category {
            font-size: 0.8rem;
            color: var(--primary-color);
            margin-bottom: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .article-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #222;
            /* teks lebih gelap */
            margin-bottom: 12px;
            font-size: 1.3rem;
            line-height: 1.4;
        }

        .article-excerpt {
            color: #555;
            /* abu sedang */
            font-size: 0.95rem;
            margin-bottom: 20px;
            line-height: 1.6;
            flex-grow: 1;
        }

        .article-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: #888;
            margin-top: 15px;
        }

        .read-more-btn {
            background-color: var(--primary-color);
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            font-size: 0.9rem;
            color: white;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .read-more-btn:hover {
            background-color: #9a0e12;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(186, 24, 27, 0.3);
        }

        /* PAGINATION STYLING - DIPERBAIKI TOTAL */
        .pagination-wrapper {
            padding: 50px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        /* Sembunyikan elemen default Laravel pagination */
        .pagination-wrapper>p {
            display: none;
        }

        .pagination-wrapper nav {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        /* Override semua styling pagination Bootstrap */
        .pagination {
            display: inline-flex !important;
            gap: 8px;
            margin: 0 !important;
            padding: 0 !important;
            list-style: none;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .pagination li {
            margin: 0 !important;
            padding: 0 !important;
            display: inline-block;
        }

        .pagination a,
        .pagination span {
            color: #333;
            border: 2px solid #dee2e6;
            padding: 12px 18px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
            background-color: white;
            min-width: 48px;
            height: 48px;
            text-align: center;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-sizing: border-box;
        }

        /* Active page */
        .pagination .active span {
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
            color: white !important;
            box-shadow: 0 4px 12px rgba(186, 24, 27, 0.3);
            cursor: default;
        }

        /* Hover effect - except active and disabled */
        .pagination a:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(186, 24, 27, 0.2);
        }

        /* Disabled state */
        .pagination .disabled span {
            background-color: #f8f9fa !important;
            border-color: #dee2e6 !important;
            color: #6c757d !important;
            cursor: not-allowed !important;
            opacity: 0.6;
        }

        .pagination .disabled:hover span {
            transform: none;
            box-shadow: none;
        }

        /* SVG/Icon dalam pagination */
        .pagination svg {
            width: 16px;
            height: 16px;
        }

        /* Teks Previous/Next jika ada */
        .pagination .page-link[rel="prev"]::before {
            content: "‹";
            font-size: 1.5rem;
            line-height: 1;
        }

        .pagination .page-link[rel="next"]::after {
            content: "›";
            font-size: 1.5rem;
            line-height: 1;
        }

        .pagination {
            margin-top: 30px;
        }

        .pagination .page-link {
            color: #007bff;
            border-radius: 8px;
            transition: all 0.2s;
        }

        .pagination .page-link:hover {
            background-color: #007bff;
            color: #fff;
        }

        .pagination .active .page-link {
            background-color: #007bff;
            border-color: #007bff;
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

            .judul {
                padding: 40px 15px;
            }

            .judul h1 {
                font-size: 2.2rem;
            }

            .artikel {
                padding: 40px 15px;
            }

            .article-card-wrapper {
                margin-bottom: 30px;
            }

            .pagination a,
            .pagination span {
                padding: 10px 15px;
                min-width: 44px;
                height: 44px;
                font-size: 0.95rem;
            }
        }

        @media (max-width: 576px) {
            .judul h1 {
                font-size: 1.8rem;
            }

            .article-img {
                height: 180px;
            }

            .article-body {
                padding: 20px;
            }

            .article-card-wrapper {
                margin-bottom: 25px;
            }

            .pagination {
                gap: 5px;
            }

            .pagination a,
            .pagination span {
                padding: 8px 12px;
                min-width: 40px;
                height: 40px;
                font-size: 0.9rem;
            }

            .pagination svg {
                width: 14px;
                height: 14px;
            }
        }
    </style>
</head>

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

    <section class="judul">
        <div class="container-fluid" style="max-width: 800px;">
            <h1>Selamat Membaca <span>{{ Auth::user()->name }}!</span></h1>
            <p>Temukan artikel otomotif terbaru dan terpopuler untuk menambah wawasan Anda</p>
            <div class="search-box">
                <input type="text" class="search-input" placeholder="Kesulitan mencari artikel? Cari di sini...">
                <button class="search-btn">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </section>

    <section class="artikel">
        <div class="container">
            <div class="row">
                <!-- Main Content - FULL WIDTH TANPA SIDEBAR -->
                <div class="col-12">
                    <h2 class="mb-5" style="font-weight: 700; font-size: 2rem;">Artikel Terbaru</h2>
                    <div class="row">
                        @forelse($posts as $post)
                        <div class="col-xl-4 col-lg-6 col-md-6 article-card-wrapper">
                            <div class="article-card">
                                @if($post->thumbnail && Storage::disk('public')->exists($post->thumbnail))
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" class="article-img" alt="{{ $post->title }}">
                                @else
                                <img src="{{ asset('img/mobil5.jpg') }}" class="article-img" alt="Gambar Default">
                                @endif
                                <div class="article-body">
                                    <div class="article-category">{{ $post->category->name ?? 'UMUM' }}</div>
                                    <h3 class="article-title">{{ Str::limit($post->title, 60) }}</h3>
                                    <p class="article-excerpt">{{ Str::limit(strip_tags($post->content), 120) }}</p>
                                    <a href="{{ route('artikel.show', $post->slug) }}" class="read-more-btn">Baca Selengkapnya</a>
                                    <div class="article-meta">
                                        <span><i class="bi bi-clock"></i> {{ $post->created_at->diffForHumans() }}</span>
                                        <span><i class="bi bi-eye"></i> {{ number_format($post->views) }} dilihat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <div class="text-center py-5">
                                <i class="bi bi-journal-text" style="font-size: 4rem; color: #ccc; margin-bottom: 20px;"></i>
                                <h4 class="text-muted mb-3">Belum ada artikel yang tersedia</h4>
                                <p class="text-muted">Silakan kembali nanti untuk melihat artikel terbaru</p>
                            </div>
                        </div>
                        @endforelse
                    </div>

                    <!-- Pagination dengan styling yang lebih baik -->
                    @if($posts->hasPages())
                    <div class="d-flex justify-content-center mt-4">
                        {{ $posts->onEachSide(1)->links('pagination::bootstrap-5') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

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
        // Search functionality
        document.querySelector('.search-btn').addEventListener('click', function() {
            const searchTerm = document.querySelector('.search-input').value;
            if (searchTerm.trim()) {
                window.location.href = "{{ route('artikel') }}?search=" + encodeURIComponent(searchTerm);
            }
        });

        document.querySelector('.search-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                document.querySelector('.search-btn').click();
            }
        });

        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>