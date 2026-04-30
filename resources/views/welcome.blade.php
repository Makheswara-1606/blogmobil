<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <title>OTOBLOG - Blog Otomotif Terpercaya</title>
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

    /* Navigation */
    .navbar {
        background-color: var(--primary-color);
        padding: 18px 0;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .navbar-brand {
        font-size: 28px;
        font-weight: 700;
        color: white;
        letter-spacing: 1px;
    }

    .navbar-brand span {
        color: var(--dark-color);
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
        color: var(--dark-color);
    }

    .navbar-nav .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: var(--dark-color);
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

    /* Hero Section */
    .hero-section {
        min-height: 100vh;
        background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.75)), url('https://wsa-website-assets.s3.amazonaws.com/assets/images/iconiccars.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        align-items: center;
        padding: 120px 0 80px;
    }

    .hero-content {
        color: white;
        animation: fadeInUp 1s ease;
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

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 1.5rem;
    }

    .hero-title span {
        color: var(--primary-color);
    }

    .hero-subtitle {
        font-size: 1.15rem;
        margin-bottom: 2.5rem;
        max-width: 550px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.9);
    }

    .hero-feature-box {
        background-color: white;
        color: var(--dark-color);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        transform: translateY(0);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .hero-feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 70px rgba(0, 0, 0, 0.35);
    }

    .hero-feature-box h3 {
        font-size: 1.5rem;
        margin-bottom: 25px;
        color: var(--dark-color);
    }

    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .feature-list li {
        margin-bottom: 15px;
        position: relative;
        padding-left: 30px;
        font-size: 0.95rem;
        line-height: 1.6;
    }

    .feature-list li:before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--primary-color);
        font-weight: bold;
        font-size: 1.2rem;
    }

    .feature-list li:last-child {
        margin-bottom: 0;
    }

    /* Section Headers */
    .section-header {
        margin-bottom: 50px;
    }

    .section-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .section-header h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 80px;
        height: 4px;
        background-color: var(--primary-color);
    }

    .section-header.center h2::after {
        left: 50%;
        transform: translateX(-50%);
    }

    .section-header p {
        font-size: 1.05rem;
        color: #6c757d;
        margin-top: 20px;
    }

    /* Article Cards */
    .article-card {
        border: 1px solid #e0e0e0;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
        background-color: #ffffff;
        /* Light mode: putih bersih */
        color: #333333;
        /* Light mode: teks gelap */
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .article-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .article-img-container {
        position: relative;
        overflow: hidden;
        height: 240px;
    }

    .article-img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .article-card:hover .article-img {
        transform: scale(1.1);
    }

    .article-category {
        position: absolute;
        top: 20px;
        left: 20px;
        background-color: var(--primary-color);
        color: white;
        padding: 6px 16px;
        border-radius: 25px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        z-index: 2;
    }

    .article-body {
        padding: 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .article-title {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: #222222;
        /* Light mode: teks lebih gelap */
        margin-bottom: 15px;
        font-size: 1.25rem;
        line-height: 1.4;
    }

    .article-excerpt {
        color: #555555;
        /* Light mode: abu sedang */
        font-size: 0.95rem;
        margin-bottom: 25px;
        line-height: 1.7;
        flex-grow: 1;
    }

    .article-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.85rem;
        color: #888888;
        /* Light mode: abu terang */
        border-top: 1px solid #e0e0e0;
        /* Light mode: border abu */
        padding-top: 20px;
        margin-top: 20px;
    }

    .article-meta i {
        margin-right: 6px;
    }

    .read-more-btn {
        background-color: var(--primary-color);
        border: none;
        border-radius: 8px;
        padding: 12px 25px;
        font-size: 0.9rem;
        color: white;
        text-decoration: none;
        display: inline-block;
        font-weight: 600;
        transition: all 0.3s ease;
        text-align: center;
    }

    .read-more-btn:hover {
        background-color: #9a0e12;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(186, 24, 27, 0.4);
    }

    .article-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
        gap: 35px;
        margin-bottom: 60px;
    }

    /* Join Section */
    .join-section {
        background-color: var(--gray-color);
        padding: 100px 0;
    }

    .join-card {
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
        background-color: var(--dark-color);
        color: white;
        height: 100%;
    }

    .join-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    }

    .join-card .card-body {
        padding: 45px 35px;
    }

    .join-icon {
        width: 90px;
        height: 90px;
        margin: 0 auto 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(186, 24, 27, 0.15);
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .join-card:hover .join-icon {
        background-color: rgba(186, 24, 27, 0.25);
        transform: scale(1.05);
    }

    .join-icon img {
        width: 45px;
        height: 45px;
    }

    .join-card h4 {
        font-size: 1.5rem;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .join-card p {
        font-size: 0.95rem;
        line-height: 1.7;
        color: #ccc;
        margin-bottom: 30px;
    }

    /* Pagination */
    .pagination {
        gap: 8px;
    }

    .pagination .page-link {
        color: var(--dark-color);
        border: 2px solid #dee2e6;
        padding: 10px 18px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .pagination .page-item.active .page-link {
        background-color: var(--dark-color);
        border-color: var(--dark-color);
        color: white;
    }

    .pagination .page-link:hover {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
        transform: translateY(-2px);
    }

    .pagination .page-item.disabled .page-link {
        background-color: #f8f9fa;
        border-color: #dee2e6;
    }

    /* Footer */
    footer {
        background-color: var(--dark-color);
        color: white;
        padding: 80px 0 30px;
    }

    footer h5 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.25rem;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
        font-weight: 600;
    }

    footer h5:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 50px;
        height: 3px;
        background-color: var(--primary-color);
    }

    footer p {
        margin-bottom: 12px;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.95rem;
    }

    footer a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    footer a:hover {
        color: var(--primary-color);
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        position: relative;
        padding-left: 20px;
        display: inline-block;
        font-size: 0.95rem;
    }

    .footer-links a:before {
        content: '›';
        position: absolute;
        left: 0;
        color: var(--primary-color);
        font-size: 1.2rem;
        font-weight: bold;
    }

    .social-icons {
        display: flex;
        gap: 12px;
        margin-top: 25px;
    }

    .social-icons a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        transition: all 0.3s ease;
        font-size: 1.1rem;
    }

    .social-icons a:hover {
        background-color: var(--primary-color);
        transform: translateY(-5px);
    }

    .copyright {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 30px;
        margin-top: 60px;
        text-align: center;
    }

    .copyright p {
        margin-bottom: 0;
        font-size: 0.9rem;
    }

    /* Buttons */
    .btn-primary-custom {
        background-color: var(--primary-color);
        border: none;
        color: white;
        padding: 12px 32px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .btn-primary-custom:hover {
        background-color: #9a0e12;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(186, 24, 27, 0.3);
    }

    .btn-outline-custom {
        background-color: transparent;
        border: 2px solid white;
        color: white;
        padding: 10px 30px;
        border-radius: 10px;
        font-weight: 600;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .btn-outline-custom:hover {
        background-color: white;
        color: var(--primary-color);
        transform: translateY(-3px);
    }

    /* Sections spacing */
    section {
        position: relative;
    }

    .py-5 {
        padding-top: 80px !important;
        padding-bottom: 80px !important;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .navbar-nav {
            margin-top: 20px;
            text-align: center;
        }

        .navbar-nav .nav-link {
            margin: 10px 0;
        }

        .hero-section {
            padding: 100px 0 60px;
        }

        .section-header h2 {
            font-size: 2rem;
        }

        .article-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
    }
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-subtitle {
            font-size: 1rem;
        }

        .article-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .section-header {
            text-align: center;
        }

        .section-header h2::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .hero-feature-box {
            margin-top: 40px;
            padding: 30px;
        }

        .navbar .d-flex {
            flex-direction: column;
            width: 100%;
            gap: 10px;
        }

        .navbar .d-flex .btn {
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 1.75rem;
        }

        .section-header h2 {
            font-size: 1.75rem;
        }

        .article-body {
            padding: 25px;
        }

        .join-card .card-body {
            padding: 35px 25px;
        }
    }
</style>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <h1 class="navbar-brand mb-0">OTO<span>BLOG</span></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak Kami</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-outline-custom me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary-custom">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            Mencari Artikel<br>
                            Seputar Otomotif?<br>
                            Di OTO<span>BLOG</span> Saja
                        </h1>
                        <p class="hero-subtitle">
                            Temukan informasi terbaru, tips, dan ulasan mendalam seputar dunia otomotif dari para ahli dan penggemar.
                        </p>
                        <a href="#" class="btn btn-primary-custom">Jelajahi Artikel</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-feature-box">
                        <h3>Apa Yang Akan Anda Temui Di Blog Kami?</h3>
                        <ul class="feature-list">
                            <li>Informasi terkini seputar dunia otomotif</li>
                            <li>Jawaban untuk pertanyaan yang mungkin ada di benak Anda</li>
                            <li>Tempat berbagi pengalaman dan pengetahuan</li>
                            <li>Tips perawatan kendaraan dari para ahli</li>
                            <li>Ulasan mendalam tentang model kendaraan terbaru</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Articles Section -->
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="section-header">
                <h2>Cari Artikel Baru Dan Menarik Di Sini!</h2>
                <p class="text-muted">Temukan berbagai artikel menarik seputar otomotif yang ditulis oleh para ahli dan penggemar.</p>
            </div>

            <div class="article-grid">
                <!-- Card 1 -->
                <div class="article-card">
                    <div class="article-img-container">
                        <span class="article-category">PERAWATAN</span>
                        <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=800" class="article-img" alt="Perawatan Mesin Mobil">
                    </div>
                    <div class="article-body">
                        <h3 class="article-title">Tips Merawat Mesin Mobil Agar Tetap Optimal</h3>
                        <p class="article-excerpt">Pelajari cara merawat mesin mobil Anda dengan benar untuk menjaga performa dan umur panjang kendaraan.</p>
                        <a href="#" class="read-more-btn">Baca Selengkapnya</a>
                        <div class="article-meta">
                            <span><i class="bi bi-clock"></i> 2 hari lalu</span>
                            <span><i class="bi bi-eye"></i> 1.2k dilihat</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="article-card">
                    <div class="article-img-container">
                        <span class="article-category">TEKNOLOGI</span>
                        <img src="https://images.unsplash.com/photo-1593941707882-a5bba14938c7?w=800" class="article-img" alt="Mobil Listrik">
                    </div>
                    <div class="article-body">
                        <h3 class="article-title">Inovasi Terbaru dalam Teknologi Mobil Listrik</h3>
                        <p class="article-excerpt">Jelajahi perkembangan terbaru dalam teknologi kendaraan listrik dan bagaimana hal itu mengubah industri otomotif.</p>
                        <a href="#" class="read-more-btn">Baca Selengkapnya</a>
                        <div class="article-meta">
                            <span><i class="bi bi-clock"></i> 5 hari lalu</span>
                            <span><i class="bi bi-eye"></i> 2.5k dilihat</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="article-card">
                    <div class="article-img-container">
                        <span class="article-category">REVIEW</span>
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=800" class="article-img" alt="Toyota Avanza">
                    </div>
                    <div class="article-body">
                        <h3 class="article-title">Review Lengkap: Toyota All New Avanza 2023</h3>
                        <p class="article-excerpt">Ulasan mendalam tentang fitur, performa, dan kelebihan Toyota Avanza generasi terbaru.</p>
                        <a href="#" class="read-more-btn">Baca Selengkapnya</a>
                        <div class="article-meta">
                            <span><i class="bi bi-clock"></i> 1 minggu lalu</span>
                            <span><i class="bi bi-eye"></i> 3.1k dilihat</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="article-card">
                    <div class="article-img-container">
                        <span class="article-category">MODIFIKASI</span>
                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=800" class="article-img" alt="Modifikasi Mobil">
                    </div>
                    <div class="article-body">
                        <h3 class="article-title">Ide Modifikasi Mobil untuk Pemula dengan Budget Terbatas</h3>
                        <p class="article-excerpt">Temukan inspirasi modifikasi mobil yang terjangkau namun tetap membuat kendaraan Anda tampil menarik.</p>
                        <a href="#" class="read-more-btn">Baca Selengkapnya</a>
                        <div class="article-meta">
                            <span><i class="bi bi-clock"></i> 2 minggu lalu</span>
                            <span><i class="bi bi-eye"></i> 4.7k dilihat</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="article-card">
                    <div class="article-img-container">
                        <span class="article-category">KEAMANAN</span>
                        <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=800" class="article-img" alt="Keamanan Berkendara">
                    </div>
                    <div class="article-body">
                        <h3 class="article-title">Panduan Lengkap Keselamatan Berkendara di Jalan Tol</h3>
                        <p class="article-excerpt">Pelajari tips dan teknik berkendara yang aman saat melintasi jalan tol untuk perjalanan yang nyaman.</p>
                        <a href="#" class="read-more-btn">Baca Selengkapnya</a>
                        <div class="article-meta">
                            <span><i class="bi bi-clock"></i> 3 minggu lalu</span>
                            <span><i class="bi bi-eye"></i> 5.2k dilihat</span>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="article-card">
                    <div class="article-img-container">
                        <span class="article-category">EKONOMI</span>
                        <img src="https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?w=800" class="article-img" alt="Hemat Bahan Bakar">
                    </div>
                    <div class="article-body">
                        <h3 class="article-title">Cara Menghemat Bahan Bakar hingga 30%</h3>
                        <p class="article-excerpt">Teknik-teknik berkendara yang dapat membantu Anda menghemat konsumsi bahan bakar secara signifikan.</p>
                        <a href="#" class="read-more-btn">Baca Selengkapnya</a>
                        <div class="article-meta">
                            <span><i class="bi bi-clock"></i> 1 bulan lalu</span>
                            <span><i class="bi bi-eye"></i> 6.8k dilihat</span>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mt-4">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="bi bi-chevron-left"></i> Previous
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            Next <i class="bi bi-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Join Section -->
    <section class="join-section">
        <div class="container">
            <div class="section-header center text-center">
                <h2>Bergabunglah Menjadi Bagian Dari <span style="color: var(--primary-color);">OTOBLOG</span></h2>
                <p class="text-muted">Pilih peran yang sesuai dengan minat Anda dan mulailah menjelajahi dunia otomotif bersama kami.</p>
            </div>

            <div class="row justify-content-center g-4">
                <div class="col-lg-5 col-md-6">
                    <div class="join-card">
                        <div class="card-body text-center">
                            <div class="join-icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/2702/2702154.png" alt="book icon">
                            </div>
                            <h4 class="card-title">Daftar Sebagai Pembaca</h4>
                            <p class="card-text">
                                Dengan mendaftar sebagai pembaca, Anda akan mendapatkan akses penuh ke berbagai artikel menarik seputar dunia otomotif. Dapatkan informasi terbaru, tips berguna, dan ulasan mendalam yang kami sajikan khusus untuk Anda.
                            </p>
                            <a href="#" class="btn btn-primary-custom">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="join-card">
                        <div class="card-body text-center">
                            <div class="join-icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="writer icon">
                            </div>
                            <h4 class="card-title">Daftar Sebagai Blogger</h4>
                            <p class="card-text">
                                Bergabunglah sebagai blogger di OTOBLOG dan bagikan pengetahuan serta pengalaman Anda tentang dunia otomotif kepada komunitas kami. Tulis artikel, berbagi tips, dan berinteraksi dengan pembaca yang memiliki minat serupa.
                            </p>
                            <a href="{{ route('verifikasi') }}" class="btn btn-primary-custom">Mulai Menulis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <h5>OTOBLOG</h5>
                    <p>
                        Tempat berbagi artikel, pengalaman, dan opini tentang dunia otomotif. Kami berkomitmen untuk memberikan konten berkualitas yang informatif dan menghibur.
                    </p>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5>Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Artikel</a></li>
                        <li><a href="#">Tentang</a></li>
                        <li><a href="{{ route('kontak') }}">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5>Kategori</h5>
                    <ul class="footer-links">
                        <li><a href="#">Perawatan</a></li>
                        <li><a href="#">Teknologi</a></li>
                        <li><a href="#">Review</a></li>
                        <li><a href="#">Modifikasi</a></li>
                        <li><a href="#">Tips & Trik</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5>Kontak</h5>
                    <p><i class="bi bi-geo-alt me-2"></i>Depok, Indonesia</p>
                    <p><i class="bi bi-envelope me-2"></i>otoblog@example.com</p>
                    <p><i class="bi bi-phone me-2"></i>+62 812 3456 7890</p>
                </div>
            </div>

            <div class="copyright">
                <p>© 2025 OTOBLOG. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '12px 0';
            } else {
                navbar.style.padding = '18px 0';
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>