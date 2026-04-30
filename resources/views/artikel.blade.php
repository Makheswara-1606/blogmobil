<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>OTO BLOG - Artikel</title>
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
        .artikel-page {
            padding: 100px 70px 50px;
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

        /* Filter Section */
        .filter-section {
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .filter-title {
            font-weight: 600;
            margin-bottom: 20px;
            color: var(--primary-color);
            font-size: 1.3rem;
        }

        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 25px;
        }

        .filter-btn {
            background-color: white;
            border: 2px solid #e9ecef;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
            transform: translateY(-2px);
        }

        .search-box {
            display: flex;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 50px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .search-box:focus-within {
            box-shadow: 0 6px 20px rgba(186, 24, 27, 0.15);
        }

        .search-input {
            flex: 1;
            border: none;
            padding: 15px 25px;
            font-size: 1rem;
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

        /* Article Grid */
        /* Article Grid */
        .article-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .article-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            background-color: white;
            /* Light theme */
            color: var(--text-dark);
            height: 100%;
        }

        .article-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
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
        }

        .article-category {
            font-size: 0.8rem;
            color: var(--primary-color);
            margin-bottom: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .article-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 15px;
            font-size: 1.3rem;
            line-height: 1.4;
            transition: color 0.3s ease;
        }

        .article-title:hover {
            color: var(--primary-color);
        }

        .article-excerpt {
            color: var(--text-light);
            font-size: 0.95rem;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .article-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: #999;
            margin-top: 20px;
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
        }

        .read-more-btn:hover {
            background-color: #9a0e12;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(186, 24, 27, 0.3);
        }


        /* Pagination */
        .pagination .page-link {
            color: black;
            border: 1px solid #dee2e6;
            padding: 12px 20px;
            font-weight: 500;
            margin: 0 5px;
            border-radius: 8px;
        }

        .pagination .page-item.active .page-link {
            background-color: black;
            border-color: black;
            color: white;
        }

        .pagination .page-link:hover {
            background-color: #e9ecef;
            border-color: #dee2e6;
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

        /* Sidebar */
        .sidebar-widget {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .widget-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
            font-size: 1.2rem;
        }

        .popular-article {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #f5f5f5;
            transition: all 0.3s ease;
        }

        .popular-article:hover {
            transform: translateX(5px);
        }

        .popular-article:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .popular-article-img {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 6px;
            margin-right: 15px;
        }

        .popular-article-content h4 {
            font-size: 0.9rem;
            margin-bottom: 8px;
            line-height: 1.3;
            font-weight: 600;
        }

        .popular-article-content .date {
            font-size: 0.75rem;
            color: #999;
        }

        .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .category-list li {
            padding: 12px 0;
            border-bottom: 1px solid #f5f5f5;
            transition: all 0.3s ease;
        }

        .category-list li:hover {
            background-color: #f8f9fa;
            padding-left: 10px;
        }

        .category-list li:last-child {
            border-bottom: none;
        }

        .category-list a {
            color: var(--text-dark);
            text-decoration: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 500;
        }

        .category-list a:hover {
            color: var(--primary-color);
        }

        .category-count {
            background-color: #f0f0f0;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            color: var(--text-light);
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

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-state i {
            font-size: 4rem;
            color: #ccc;
            margin-bottom: 20px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .artikel-page {
                padding: 100px 30px 50px;
            }

            .navbar-nav {
                margin-left: 0;
                margin-right: 0;
                margin-top: 20px;
                text-align: center;
            }

            .navbar-nav .nav-link {
                margin: 10px 0;
            }

            .navbar .container-fluid {
                padding: 10px 15px;
            }
        }



        @media (max-width: 768px) {
            .artikel-page {
                padding: 80px 15px 30px;
            }

            .judul h1 {
                font-size: 2.2rem;
            }

            .judul p {
                font-size: 1rem;
            }

            .article-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .filter-buttons {
                gap: 8px;
            }

            .filter-btn {
                padding: 8px 16px;
                font-size: 0.85rem;
            }
        }

        @media (max-width: 576px) {
            .judul h1 {
                font-size: 1.8rem;
            }

            .article-img {
                height: 180px;
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


    <!-- Judul Section -->
    <section class="judul">
        <div class="container-fluid" style="max-width: 800px;">
            <h1>Kumpulan <span>Artikel</span> Otomotif</h1>
            <p>Temukan berbagai artikel menarik seputar dunia otomotif untuk menambah wawasan Anda</p>
        </div>
    </section>

    <section class="artikel-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <!-- Filter Section -->
                    <div class="filter-section">
                        <h3 class="filter-title">Filter Artikel</h3>
                        <div class="filter-buttons">
                            <button class="filter-btn active" data-filter="all">Semua</button>
                            <button class="filter-btn" data-filter="latest">Terbaru</button>
                            <button class="filter-btn" data-filter="popular">Populer</button>
                            @foreach($categories as $category)
                            <button class="filter-btn" data-category="{{ $category->slug }}">{{ $category->name }}</button>
                            @endforeach
                        </div>
                        <form action="{{ route('artikel') }}" method="GET" class="search-box">
                            <input type="text" name="search" class="search-input" placeholder="Cari artikel..." value="{{ request('search') }}">
                            <button type="submit" class="search-btn">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Article Grid -->
                    <div class="article-grid">
                        @forelse($posts as $post)
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
                        @empty
                        <div class="col-12">
                            <div class="empty-state">
                                <i class="bi bi-journal-text"></i>
                                <h4 class="text-muted mb-3">Belum ada artikel yang tersedia</h4>
                                <p class="text-muted">Silakan kembali nanti untuk melihat artikel terbaru</p>
                            </div>
                        </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    @if($posts->hasPages())
                    <div class="d-flex justify-content-center mt-4">
                        {{ $posts->onEachSide(1)->links('pagination::bootstrap-5') }}
                    </div>
                    @endif
                </div>

                <div class="col-lg-3">
                    <!-- Popular Articles Widget -->
                    <div class="sidebar-widget">
                        <h4 class="widget-title">Artikel Populer</h4>
                        @forelse($popularPosts as $popular)
                        <div class="popular-article">
                            @if($popular->thumbnail && Storage::disk('public')->exists($popular->thumbnail))
                            <img src="{{ asset('storage/' . $popular->thumbnail) }}" class="popular-article-img" alt="{{ $popular->title }}">
                            @else
                            <img src="{{ asset('img/mobil5.jpg') }}" class="popular-article-img" alt="Gambar Default">
                            @endif
                            <div class="popular-article-content">
                                <h4>{{ Str::limit($popular->title, 40) }}</h4>
                                <span class="date">{{ $popular->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        @empty
                        <p class="text-muted">Belum ada artikel populer.</p>
                        @endforelse
                    </div>

                    <!-- Categories Widget -->
                    <div class="sidebar-widget">
                        <h4 class="widget-title">Kategori</h4>
                        <ul class="category-list">
                            @foreach($categories as $category)
                            <li>
                                <a href="{{ route('artikel', ['category' => $category->slug]) }}">
                                    {{ $category->name }}
                                    <span class="category-count">{{ $category->posts_count }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
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
        // Filter button functionality
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.dataset.filter;
                const category = this.dataset.category;

                let url = new URL(window.location.href);

                if (filter) {
                    if (filter === 'all') {
                        url.searchParams.delete('filter');
                        url.searchParams.delete('category');
                    } else {
                        url.searchParams.set('filter', filter);
                        url.searchParams.delete('category');
                    }
                } else if (category) {
                    url.searchParams.set('category', category);
                    url.searchParams.delete('filter');
                }

                window.location.href = url.toString();
            });
        });

        // Set active filter button based on current URL
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const currentFilter = urlParams.get('filter');
            const currentCategory = urlParams.get('category');

            document.querySelectorAll('.filter-btn').forEach(button => {
                button.classList.remove('active');

                if (currentFilter && button.dataset.filter === currentFilter) {
                    button.classList.add('active');
                } else if (currentCategory && button.dataset.category === currentCategory) {
                    button.classList.add('active');
                } else if (!currentFilter && !currentCategory && button.dataset.filter === 'all') {
                    button.classList.add('active');
                }
            });
        });

        // Allow pressing Enter to search
        document.querySelector('.search-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                this.closest('form').submit();
            }
        });
    </script>
</body>

</html>