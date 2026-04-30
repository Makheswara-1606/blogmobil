<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>OTO BLOG - Admin Dashboard</title>
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
            --success-color: #198754;
            --info-color: #0dcaf0;
            --warning-color: #ffc107;
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

        /* Dashboard Container */
        .dashboard-container {
            padding: 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .page-title {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        /* Stats Cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 4px solid var(--primary-color);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
        }

        .stat-card.admin {
            border-left-color: var(--primary-color);
        }

        .stat-card.blogger {
            border-left-color: var(--info-color);
        }

        .stat-card.user {
            border-left-color: var(--success-color);
        }

        .stat-card.categories {
            border-left-color: var(--warning-color);
        }

        .stat-value {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--text-dark);
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--text-light);
            font-weight: 500;
        }

        .stat-icon {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .stat-card.admin .stat-icon {
            color: var(--primary-color);
        }

        .stat-card.blogger .stat-icon {
            color: var(--info-color);
        }

        .stat-card.user .stat-icon {
            color: var(--success-color);
        }

        .stat-card.categories .stat-icon {
            color: var(--warning-color);
        }

        /* Charts Section */
        .charts-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .chart-container {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            position: relative;
        }

        .chart-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        /* Chart canvas container untuk diagram lingkaran yang lebih kecil */
        .chart-canvas-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px; /* Diperkecil dari sebelumnya */
        }

        .chart-canvas-container.bar-chart {
            height: 250px; /* Tetap lebih tinggi untuk bar chart */
        }

        /* Tabs Navigation */
        .admin-tabs {
            margin-bottom: 20px;
        }

        .nav-tabs .nav-link {
            color: var(--text-dark);
            font-weight: 500;
            padding: 10px 20px;
        }

        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            border-bottom: 3px solid var(--primary-color);
            font-weight: 600;
        }

        /* Content Cards */
        .content-card {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
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

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #bb2d3b;
            border-color: #bb2d3b;
        }

        .table th {
            font-weight: 600;
            border-top: none;
            font-family: 'Poppins', sans-serif;
        }

        .action-btn {
            padding: 5px 10px;
            font-size: 0.875rem;
            margin-right: 5px;
        }

        /* Modal Styling */
        .modal-content {
            border-radius: 8px;
            border: none;
        }

        .modal-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #eee;
        }

        .modal-title {
            font-weight: 600;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text-dark);
        }

        .form-control {
            padding: 10px 15px;
            border-radius: 6px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(186, 24, 27, 0.25);
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

        /* Badge for role */
        .badge-role {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
        }

        .badge-admin {
            background-color: var(--primary-color);
            color: white;
        }

        .badge-blogger {
            background-color: #0d6efd;
            color: white;
        }

        .badge-user {
            background-color: #6c757d;
            color: white;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .charts-section {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .navbar .container-fluid {
                padding: 10px 15px;
            }

            .card-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .table-responsive {
                overflow-x: auto;
            }

            .stats-container {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 576px) {
            .stats-container {
                grid-template-columns: 1fr;
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
            
            <div class="text-center">
                <div class="user-dropdown dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-avatar">
                            @if(auth()->user()->hasProfilePhoto())
                                <img src="{{ auth()->user()->photo_url }}" alt="{{ auth()->user()->name }}" class="rounded-circle" width="32" height="32">
                            @else
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                    {{ auth()->user()->initial }}
                                </div>
                            @endif
                        </div>
                        
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="{{ route('halamanProfile') }}">Profil Saya</a></li>
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
        <h2 class="page-title">Dashboard Admin</h2>

        <!-- Stats Overview -->
        <div class="stats-container">
            <div class="stat-card admin">
                <div class="stat-icon">
                    <i class="bi bi-person-gear"></i>
                </div>
                <div class="stat-value">{{ $users->where('role', 'admin')->count() }}</div>
                <div class="stat-label">Admin</div>
            </div>
            <div class="stat-card blogger">
                <div class="stat-icon">
                    <i class="bi bi-person-badge"></i>
                </div>
                <div class="stat-value">{{ $users->where('role', 'blogger')->count() }}</div>
                <div class="stat-label">Blogger</div>
            </div>
            <div class="stat-card user">
                <div class="stat-icon">
                    <i class="bi bi-people"></i>
                </div>
                <div class="stat-value">{{ $users->where('role', 'user')->count() }}</div>
                <div class="stat-label">Pengguna</div>
            </div>
            <div class="stat-card categories">
                <div class="stat-icon">
                    <i class="bi bi-tags"></i>
                </div>
                <div class="stat-value">{{ $categories->count() }}</div>
                <div class="stat-label">Kategori</div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="charts-section">
            <div class="chart-container">
                <h4 class="chart-title">Distribusi Pengguna Berdasarkan Role</h4>
                <div class="chart-canvas-container">
                    <canvas id="userRoleChart"></canvas>
                </div>
            </div>
            <div class="chart-container">
                <h4 class="chart-title">Top Kategori Berdasarkan Artikel</h4>
                <div class="chart-canvas-container bar-chart">
                    <canvas id="categoryChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs admin-tabs" id="adminTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="users-tab" data-bs-toggle="tab" data-bs-target="#users" type="button" role="tab" aria-controls="users" aria-selected="true">
                    <i class="bi bi-people"></i> Kelola Pengguna
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="categories-tab" data-bs-toggle="tab" data-bs-target="#categories" type="button" role="tab" aria-controls="categories" aria-selected="false">
                    <i class="bi bi-tags"></i> Kelola Kategori
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="adminTabContent">
            <!-- Users Tab -->
            <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="users-tab">
                <div class="content-card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Pengguna</h4>
                        <div class="text-muted">Total: {{ $users->count() }} users</div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Jumlah Artikel</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if($user->hasProfilePhoto())
                                            <img src="{{ $user->photo_url }}" alt="{{ $user->name }}" class="rounded-circle me-2" width="32" height="32">
                                            @else
                                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">
                                                {{ $user->initial }}
                                            </div>
                                            @endif
                                            {{ $user->name }}
                                        </div>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <select class="form-select form-select-sm role-select" data-user-id="{{ $user->id }}" style="width: auto;">
                                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                            <option value="blogger" {{ $user->role == 'blogger' ? 'selected' : '' }}>Blogger</option>
                                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                        </select>
                                    </td>
                                    <td>{{ $user->posts_count }}</td>
                                    <td>{{ $user->created_at->format('d M Y') }}</td>
                                    <td>
                                        @if($user->id != auth()->id())
                                        <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger action-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                        @else
                                        <button class="btn btn-sm btn-outline-secondary action-btn" disabled>
                                            <i class="bi bi-person"></i> Anda
                                        </button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Categories Tab -->
            <div class="tab-pane fade" id="categories" role="tabpanel" aria-labelledby="categories-tab">
                <div class="content-card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Kategori</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                            <i class="bi bi-plus-circle"></i> Tambah Kategori
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Kategori</th>
                                    <th>Jumlah Artikel</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->posts_count }}</td>
                                    <td>{{ $category->created_at->format('d M Y') }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary action-btn edit-category-btn"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editCategoryModal"
                                            data-category-id="{{ $category->id }}"
                                            data-category-name="{{ $category->name }}">
                                            <i class="bi bi-pencil"></i> Edit
                                        </button>
                                        <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger action-btn"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCategoryModalLabel">Tambah Kategori Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="categoryName" name="name" placeholder="Masukkan nama kategori" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Category Modal -->
    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel">Edit Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editCategoryForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="editCategoryName" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="editCategoryName" name="name" placeholder="Masukkan nama kategori" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
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
                    <p><i class="bi bi-envelope me-2"></i>admin@otoblog.com</p>
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
    <script>
        // Data for charts
        const userRoleData = {
            labels: ['Admin', 'Blogger', 'User'],
            datasets: [{
                data: [
                    {{ $users->where('role', 'admin')->count() }},
                    {{ $users->where('role', 'blogger')->count() }},
                    {{ $users->where('role', 'user')->count() }}
                ],
                backgroundColor: [
                    '#BA181B',
                    '#0dcaf0',
                    '#198754'
                ],
                borderWidth: 1
            }]
        };

        // Prepare category data
        const categoryNames = {!! json_encode($categories->pluck('name')) !!};
        const categoryPosts = {!! json_encode($categories->pluck('posts_count')) !!};
        
        const categoryData = {
            labels: categoryNames,
            datasets: [{
                label: 'Jumlah Artikel',
                data: categoryPosts,
                backgroundColor: [
                    '#BA181B', '#0dcaf0', '#198754', '#ffc107', 
                    '#6f42c1', '#fd7e14', '#20c997', '#e83e8c'
                ],
                borderWidth: 1
            }]
        };

        // Initialize charts
        document.addEventListener('DOMContentLoaded', function() {
            // User Role Chart (Doughnut) - Diperkecil
            const userRoleCtx = document.getElementById('userRoleChart').getContext('2d');
            new Chart(userRoleCtx, {
                type: 'doughnut',
                data: userRoleData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                boxWidth: 12,
                                font: {
                                    size: 11
                                }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `${label}: ${value} (${percentage}%)`;
                                }
                            }
                        }
                    },
                    cutout: '40%' // Membuat donat lebih kecil
                }
            });

            // Category Chart (Bar)
            const categoryCtx = document.getElementById('categoryChart').getContext('2d');
            new Chart(categoryCtx, {
                type: 'bar',
                data: categoryData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        });

        // Update role user
        document.querySelectorAll('.role-select').forEach(select => {
            select.addEventListener('change', function() {
                const userId = this.getAttribute('data-user-id');
                const newRole = this.value;

                fetch(`/admin/users/${userId}/role`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            role: newRole
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Role berhasil diupdate');
                        } else {
                            alert('Terjadi kesalahan');
                            location.reload();
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan');
                        location.reload();
                    });
            });
        });

        // Edit category modal
        const editCategoryModal = document.getElementById('editCategoryModal');
        if (editCategoryModal) {
            editCategoryModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const categoryId = button.getAttribute('data-category-id');
                const categoryName = button.getAttribute('data-category-name');

                const form = editCategoryModal.querySelector('#editCategoryForm');
                const nameInput = editCategoryModal.querySelector('#editCategoryName');

                form.action = `/admin/categories/${categoryId}`;
                nameInput.value = categoryName;
            });
        }
    </script>
</body>

</html>