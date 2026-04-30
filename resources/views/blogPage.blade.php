<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>OTO BLOG - {{ $post->title }}</title>
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

        /* Article Detail */
        .article-detail {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            margin: 30px auto;
            max-width: 1200px;
            overflow: hidden;
        }

        .article-header {
            margin-bottom: 30px;
            padding: 30px 30px 0;
        }

        .article-category {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .article-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--text-dark);
            line-height: 1.3;
            word-wrap: break-word;
        }

        .article-meta {
            display: flex;
            align-items: center;
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .article-meta span {
            display: flex;
            align-items: center;
        }

        .article-meta i {
            margin-right: 5px;
        }

        .article-image-container {
            width: 100%;
            margin-bottom: 30px;
            text-align: center;
        }

        .article-image {
            max-width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: cover;
            border-radius: 8px;
            display: inline-block;
        }

        .article-content {
            padding: 0 30px 30px;
            line-height: 1.8;
            font-size: 1.05rem;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        .article-content p {
            margin-bottom: 20px;
            text-align: justify;
        }

        .article-content h2,
        .article-content h3 {
            margin: 30px 0 15px 0;
            color: var(--text-dark);
            line-height: 1.4;
        }

        .article-content blockquote {
            border-left: 4px solid var(--primary-color);
            padding: 15px 20px;
            margin: 25px 0;
            font-style: italic;
            color: var(--text-light);
            background-color: #f8f9fa;
            border-radius: 0 8px 8px 0;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 20px 0;
        }

        .article-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 30px 0;
            padding: 0 30px;
        }

        .article-tag {
            background-color: #f0f0f0;
            color: var(--text-dark);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .article-tag:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .article-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 30px;
            border-top: 1px solid #eee;
            margin-top: 30px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .social-share {
            display: flex;
            gap: 10px;
        }

        .social-share a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f0f0f0;
            color: var(--text-dark);
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-share a:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        /* Related Articles */
        .related-articles {
            margin: 50px auto;
            max-width: 1200px;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 10px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .article-card {
            border: none;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            background-color: white;
            color: var(--text-dark);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .article-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .article-body {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .article-category-small {
            font-size: 0.8rem;
            color: var(--primary-color);
            margin-bottom: 8px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .article-title-small {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 10px;
            font-size: 1.1rem;
            line-height: 1.4;
            flex-grow: 1;
        }

        .article-excerpt {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .read-more-btn {
            background-color: var(--primary-color);
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 0.9rem;
            color: white;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            align-self: flex-start;
        }

        .read-more-btn:hover {
            background-color: #9a0e12;
            color: white;
            transform: translateY(-2px);
        }

        /* Footer styling */
        footer {
            background-color: black;
            color: white;
            padding: 30px 0;
            margin-top: 50px;
        }

        footer h3,
        footer h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .navbar .container-fluid {
                padding: 10px 15px;
            }

            .article-title {
                font-size: 1.8rem;
            }

            .article-header,
            .article-content,
            .article-tags,
            .article-actions {
                padding: 0 20px;
            }

            .article-header {
                padding: 20px 20px 0;
            }

            .article-content {
                padding: 0 20px 20px;
            }

            .article-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }

            .article-actions {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .social-share {
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            .article-title {
                font-size: 1.5rem;
            }

            .article-image {
                max-height: 300px;
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


    <div class="container">
        <div class="article-detail">
            <div class="article-header">
                <div class="article-category">{{ $post->category->name ?? 'UMUM' }}</div>
                <h1 class="article-title">{{ $post->title }}</h1>
                <div class="article-meta">
                    <span><i class="bi bi-person"></i> Oleh: {{ $post->user->name ?? 'Admin' }}</span>
                    <span><i class="bi bi-clock"></i> {{ $post->created_at->diffForHumans() }}</span>
                    <span><i class="bi bi-eye"></i> {{ number_format($post->views) }} dilihat</span>
                </div>
            </div>

            <div class="article-image-container">
                {{-- DEBUGGING DETAIL --}}
                <!-- 
    DEBUG INFO:
    Thumbnail in DB: {{ $post->thumbnail }}
    Storage Path: {{ storage_path('app/public/' . $post->thumbnail) }}
    File Exists: {{ $post->thumbnail && Storage::disk('public')->exists($post->thumbnail) ? 'YES' : 'NO' }}
    Asset URL: {{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : 'NO THUMBNAIL' }}
    Full URL: {{ $post->thumbnail ? url('storage/' . $post->thumbnail) : 'NO THUMBNAIL' }}
    -->

                @if($post->thumbnail && Storage::disk('public')->exists($post->thumbnail))
                <img src="{{ asset('storage/' . $post->thumbnail) }}"
                    class="article-image"
                    alt="{{ $post->title }}"
                    onerror="console.log('Image failed to load')">
                <!-- DEBUG: Using uploaded image -->
                @else
                <img src="{{ asset('img/mobil5.jpg') }}"
                    class="article-image"
                    alt="Gambar Default"
                    onerror="console.log('Default image also failed')">
                <!-- DEBUG: Using default image -->

                @if($post->thumbnail)
                <div style="background: #ffcccc; padding: 10px; margin: 10px 0; border-radius: 5px;">
                    <strong>DEBUG ERROR:</strong> Thumbnail ada di database tapi file tidak ditemukan di storage!<br>
                    Path: {{ $post->thumbnail }}<br>
                    Storage Path: {{ storage_path('app/public/' . $post->thumbnail) }}
                </div>
                @else
                <div style="background: #ffffcc; padding: 10px; margin: 10px 0; border-radius: 5px;">
                    <strong>DEBUG INFO:</strong> Tidak ada thumbnail di database
                </div>
                @endif
                @endif
            </div>

            <div class="article-content">
                {!! nl2br(e($post->content)) !!}
            </div>

            <div class="article-tags">
                <span class="article-tag">{{ $post->category->name ?? 'Otomotif' }}</span>
                @if($post->status === 'published')
                <span class="article-tag">Published</span>
                @else
                <span class="article-tag">Draft</span>
                @endif
            </div>

            <div class="article-actions">
                <div class="social-share">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-link-45deg"></i></a>
                </div>
                <a href="{{ route('artikel') }}" class="read-more-btn">
                    <i class="bi bi-arrow-left"></i> Kembali ke Artikel
                </a>
            </div>
        </div>

        @if(isset($related) && $related->count() > 0)
        <div class="related-articles">
            <h2 class="section-title">Artikel Terkait</h2>
            <div class="row g-4">
                @foreach($related as $relatedPost)
                <div class="col-md-4">
                    <div class="article-card">
                        @if($relatedPost->thumbnail && Storage::disk('public')->exists($relatedPost->thumbnail))
                        <img src="{{ asset('storage/' . $relatedPost->thumbnail) }}" class="article-img" alt="{{ $relatedPost->title }}">
                        @else
                        <img src="{{ asset('img/mobil8.jpg') }}" class="article-img" alt="Gambar Default">
                        @endif
                        <div class="article-body">
                            <div class="article-category-small">{{ $relatedPost->category->name ?? 'UMUM' }}</div>
                            <h3 class="article-title-small">{{ Str::limit($relatedPost->title, 50) }}</h3>
                            <p class="article-excerpt">{{ Str::limit(strip_tags($relatedPost->content), 100) }}</p>
                            <a href="{{ route('artikel.show', $relatedPost->slug) }}" class="read-more-btn">Baca Selengkapnya</a>
                            <div class="article-meta mt-3">
                                <span><i class="bi bi-clock"></i> {{ $relatedPost->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
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
</body>

</html>