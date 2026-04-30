<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>OTO BLOG - Dashboard Blogger</title>
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
        nav.navbar {
            font-family: "Poppins", sans-serif;
            align-items: center;
            padding: 0;
            margin: 0;
            width: 100%;
        }

        .navbar .container-fluid {
            padding: 10px 30px;
            margin: 0;
            max-width: 100%;
        }

        .navbar-brand {
            font-size: 30px;
            font-weight: bold;
            margin: 0;
        }

        .navbar-nav li a {
            color: white;
        }

        .navbar span {
            color: white;
        }

        .dropdown-menu li a {
            color: black;
        }

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
        }

        /* Dashboard Container */
        .dashboard-container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .page-title {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            background-color: rgba(186, 24, 27, 0.1);
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 15px;
        }

        .stat-content h3 {
            font-size: 1.8rem;
            margin-bottom: 0;
            font-weight: 700;
        }

        .stat-content p {
            color: var(--text-light);
            margin-bottom: 0;
            font-size: 0.9rem;
        }

        /* Content Cards */
        .content-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .card-title {
            margin-bottom: 0;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: #9d1518;
            border-color: #9d1518;
        }

        .table th {
            font-weight: 600;
            border-top: none;
            font-family: 'Poppins', sans-serif;
        }

        .badge-published {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
        }

        .badge-draft {
            background-color: #6c757d;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
        }

        .action-btn {
            padding: 5px 10px;
            font-size: 0.875rem;
            margin-right: 5px;
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

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .card-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Di navbar dashboardblog.blade.php -->
    <nav class="navbar navbar-expand-lg" style="background-color:#BA181B;">
        <div class="container-fluid">
            <h1 class="navbar-brand">OTO<span>BLOG</span></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- NAVIGASI MENU -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left: 20rem">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('dashboardblog') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.create') }}">Upload Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('artikel') }}">Lihat Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak Kami</a>
                    </li>
                </ul>
            </div>

            <!-- DROPDOWN USER -->
            <div class="text-center">
                @php
                $user = Auth::user();
                @endphp
                <div class="user-dropdown dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- Foto Profile atau Avatar -->
                        <div class="user-avatar" style="width: 40px; height: 40px; border-radius: 50%; overflow: hidden; margin-right: 10px;">
                            @if($user->hasProfilePhoto())
                            <img src="{{ $user->photo_url }}" alt="Profile Photo" style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                            <!-- Placeholder dengan initial -->
                            <div style="width: 100%; height: 100%; background-color: white; color: var(--primary-color); display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem;">
                                {{ $user->initial }}
                            </div>
                            @endif
                        </div>
                    </a>

                    <!-- MENU DROPDOWN -->
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="{{ route('halamanProfile') }}">Profil Saya</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
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

    <div class="dashboard-container">
        <h2 class="page-title">Dashboard Blogger</h2>

        <!-- Stats Overview -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-file-text"></i>
                </div>
                <div class="stat-content">
                    <h3>15</h3>
                    <p>Total Artikel</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-eye"></i>
                </div>
                <div class="stat-content">
                    <h3>5.2K</h3>
                    <p>Total Dilihat</p>
                </div>
            </div>
        </div>

        <!-- Recent Articles -->
        <div class="content-card">
            <div class="card-header">
                <h4 class="card-title">Artikel Terbaru</h4>
                <a href="{{ route('posts.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Buat Artikel Baru</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Judul Artikel</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Dilihat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>
                        @forelse($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->name ?? 'Tidak Berkategori' }}</td>
                            <td>{{ $post->created_at->format('d M Y') }}</td>
                            <td>{{ number_format($post->views) }}</td>
                            <td>
                                @if($post->status === 'published')
                                <span class="badge-published">Published</span>
                                @else
                                <span class="badge-draft">Draft</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-sm btn-outline-primary action-btn" title="Lihat"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-success action-btn" title="Edit"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger action-btn" title="Hapus" onclick="return confirm('Yakin ingin menghapus artikel ini?')"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-5">
                                <div class="text-muted">
                                    <i class="bi bi-journal-text" style="font-size: 3rem;"></i>
                                    <p class="mt-3 mb-0 fw-semibold">Belum ada artikel yang kamu buat</p>
                                    <small>Buat artikel pertama kamu sekarang!</small>
                                    <div class="mt-3">
                                        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm">
                                            <i class="bi bi-plus-circle"></i> Buat Artikel Baru
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- Popular Articles -->
        <div class="content-card">
            <div class="card-header">
                <h4 class="card-title">Artikel Populer</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Judul Artikel</th>
                            <th>Kategori</th>
                            <th>Dilihat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts->sortByDesc('views')->take(5) as $popular)
                        <tr>
                            <td>{{ $popular->title }}</td>
                            <td>{{ $popular->category->name ?? 'Tidak Berkategori' }}</td>
                            <td>{{ number_format($popular->views) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center py-5">
                                <div class="text-muted">
                                    <i class="bi bi-bar-chart-line" style="font-size: 3rem;"></i>
                                    <p class="mt-3 mb-0 fw-semibold">Belum ada artikel populer</p>
                                    <small>Artikel yang sering dibaca akan muncul di sini</small>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <footer>
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <!-- Brand -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold">OTOBLOG</h5>
                    <p>
                        Tempat berbagi artikel, pengalaman, dan opini tentang dunia otomotif.
                    </p>
                </div>

                <!-- Links -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold">Links</h5>
                    <p><a href="{{ route('dashboard') }}">Home</a></p>
                    <p><a href="{{ route('artikel') }}">Artikel</a></p>
                    <p><a href="{{ route('tentang') }}">Tentang</a></p>
                    <p><a href="{{ route('kontak') }}">Kontak</a></p>
                </div>

                <!-- Contact -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold">Kontak</h5>
                    <p><i class="bi bi-house-door me-2"></i>Depok, Indonesia</p>
                    <p><i class="bi bi-envelope me-2"></i>gthmah@gmail.com</p>
                    <p><i class="bi bi-phone me-2"></i>+62 812 3456 7890</p>
                </div>
            </div>

            <hr class="mb-4">

            <!-- Copyright -->
            <div class="text-center">
                <p class="mb-0">© 2025 OTOBLOG. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>