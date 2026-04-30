<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #0B090A;
            --primary: #BA181B;
            --primary-hover: #a01518;
            --text-light: #FFFFFF;
            --border-color: #2c2c2c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #BA181B 0%, #8B0000 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-light);
            position: relative;
            overflow-x: hidden;
        }

        /* Animated Background Shapes */
        body::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            top: -250px;
            right: -250px;
            animation: float 20s infinite ease-in-out;
        }

        body::after {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            bottom: -200px;
            left: -200px;
            animation: float 15s infinite ease-in-out reverse;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            33% {
                transform: translate(30px, -30px) rotate(120deg);
            }
            66% {
                transform: translate(-20px, 20px) rotate(240deg);
            }
        }

        .profile-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .profile-card {
            max-width: 550px;
            width: 100%;
            background: var(--text-light);
            border-radius: 20px;
            padding: 0;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            animation: slideUp 0.6s ease-out;
            position: relative;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Card Header with Gradient */
        .card-header-custom {
            background: linear-gradient(135deg, var(--primary) 0%, #8B0000 100%);
            padding: 40px 30px 80px;
            position: relative;
            overflow: hidden;
        }

        .card-header-custom::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            top: -50%;
            left: -50%;
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .card-body-custom {
            padding: 0 40px 40px;
            margin-top: -60px;
            position: relative;
            z-index: 2;
        }

        .profile-picture {
            position: relative;
            width: 140px;
            height: 140px;
            margin: 0 auto 20px;
            z-index: 3;
            transition: transform 0.3s ease;
        }

        .profile-picture:hover {
            transform: scale(1.05);
        }

        .profile-picture-wrapper {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 5px solid var(--text-light);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            position: relative;
            background: var(--text-light);
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-picture i {
            font-size: 8rem;
            color: var(--border-color);
        }

        .camera-indicator {
            position: absolute;
            bottom: 5px;
            right: 5px;
            width: 40px;
            height: 40px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 3px solid var(--text-light);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            z-index: 10;
        }

        .camera-indicator:hover {
            background: var(--primary-hover);
            transform: scale(1.1);
        }

        .camera-indicator i {
            color: var(--text-light);
            font-size: 1rem;
        }

        .btn-custom {
            background: var(--primary);
            color: var(--text-light);
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            transition: all 0.3s ease;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(186, 24, 27, 0.3);
        }

        .btn-custom:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(186, 24, 27, 0.4);
        }

        .btn-danger-custom {
            background: #dc3545;
            color: var(--text-light);
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            transition: all 0.3s ease;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
        }

        .btn-danger-custom:hover {
            background: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(220, 53, 69, 0.4);
        }

        .form-control {
            background-color: white;
            border: 2px solid #e0e0e0;
            color: var(--bg-dark);
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background-color: white;
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(186, 24, 27, 0.15);
            color: var(--bg-dark);
            transform: translateY(-2px);
        }

        .form-control::placeholder {
            color: rgba(11, 9, 10, 0.4);
        }

        .form-label {
            margin-bottom: 10px;
            display: block;
            color: var(--bg-dark);
            font-weight: 600;
            font-size: 0.95rem;
        }

        .form-label i {
            margin-right: 5px;
            color: var(--primary);
        }

        .card-title {
            text-align: center;
            margin-bottom: 15px;
            font-size: 2rem;
            position: relative;
            color: var(--text-light);
            padding-bottom: 15px;
            font-weight: 700;
            letter-spacing: 1px;
            z-index: 2;
        }

        .card-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--text-light);
            border-radius: 2px;
        }

        .divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--border-color), transparent);
            margin: 30px 0;
            border: none;
        }

        .text-link {
            color: var(--bg-dark);
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .text-link:hover {
            color: var(--primary);
            transform: translateX(-5px);
        }

        .alert {
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 20px;
            border: none;
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .photo-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }

        .section-divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 30px 0 25px;
        }

        .section-divider::before,
        .section-divider::after {
            content: '';
            flex: 1;
            border-bottom: 2px solid #e0e0e0;
        }

        .section-divider span {
            padding: 0 15px;
            color: var(--primary);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .input-group-custom {
            position: relative;
            margin-bottom: 25px;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
            z-index: 10;
            pointer-events: none;
        }

        .input-group-custom .form-control {
            padding-left: 45px;
        }

        .save-button-wrapper {
            margin-top: 35px;
        }

        .save-button-wrapper button {
            width: 100%;
            padding: 15px;
            font-size: 1.1rem;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .save-button-wrapper button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(186, 24, 27, 0.4);
        }

        .back-section {
            margin-top: 30px;
            padding-top: 25px;
            border-top: 2px solid #f0f0f0;
            text-align: center;
        }

        /* Responsive */
        @media (max-width: 576px) {
            body {
                padding: 20px 15px;
            }

            .profile-card {
                border-radius: 15px;
            }

            .card-header-custom {
                padding: 30px 20px 70px;
            }

            .card-body-custom {
                padding: 0 25px 30px;
            }

            .card-title {
                font-size: 1.6rem;
            }

            .profile-picture {
                width: 120px;
                height: 120px;
            }

            .photo-actions {
                flex-direction: column;
            }

            .photo-actions .btn {
                width: 100%;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-hover);
        }
    </style>
</head>

<body>

    <div class="profile-container">
        <div class="profile-card">
            <!-- Card Header -->
            <div class="card-header-custom">
                <h1 class="card-title">
                    <i class="bi bi-person-circle me-2"></i>Profil Saya
                </h1>
            </div>

            <!-- Card Body -->
            <div class="card-body-custom">
                <!-- Alert Messages -->
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <!-- Profile Picture Section -->
                <div class="text-center">
                    <div class="profile-picture">
                        <div class="profile-picture-wrapper">
                            @if(auth()->user()->profile_photo)
                                <img src="{{ asset('storage/' . auth()->user()->profile_photo) }}" alt="Profile Photo" id="profileImage">
                            @else
                                <img src="{{ asset('img/default.png') }}" alt="Profile Photo" id="profileImage" style="display: block;">
                                <i class="bi bi-person-circle" id="profileIcon" style="display: none;"></i>
                            @endif
                        </div>
                        <label for="photoInput" class="camera-indicator">
                            <i class="bi bi-camera-fill"></i>
                        </label>
                        <input type="file" id="photoInput" name="profile_photo" accept="image/*" style="display: none;" onchange="previewImage(this)">
                    </div>

                    <div class="photo-actions">
                        <label for="photoInput" class="btn btn-custom btn-sm">
                            <i class="bi bi-upload me-1"></i>Pilih Foto
                        </label>
                        @if(auth()->user()->profile_photo)
                            <form action="{{ route('profile.photo.delete') }}" method="POST" id="deletePhotoForm" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger-custom btn-sm" onclick="return confirm('Yakin ingin menghapus foto profil?')">
                                    <i class="bi bi-trash me-1"></i>Hapus Foto
                                </button>
                            </form>
                        @endif
                    </div>
                </div>

                <!-- Section Divider -->
                <div class="section-divider">
                    <span>Informasi Pribadi</span>
                </div>

                <!-- FORM UPDATE PROFILE -->
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Hidden file input untuk form update -->
                    <input type="file" name="profile_photo" id="photoInputForm" style="display: none;">

                    <!-- Name Input -->
                    <div class="input-group-custom">
                        <i class="bi bi-person-fill input-icon"></i>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            value="{{ old('name', auth()->user()->name) }}" placeholder="Masukkan nama Anda">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email Input -->
                    <div class="input-group-custom">
                        <i class="bi bi-envelope-fill input-icon"></i>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                            value="{{ old('email', auth()->user()->email) }}" placeholder="Masukkan email Anda">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Section Divider -->
                    <div class="section-divider">
                        <span>Informasi Tambahan</span>
                    </div>

                    <!-- Bio Input -->
                    <div class="mb-3">
                        <label for="bio" class="form-label">
                            <i class="bi bi-card-text"></i>Bio
                        </label>
                        <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="3"
                            placeholder="Ceritakan sedikit tentang diri Anda">{{ old('bio', auth()->user()->profile->bio ?? '') }}</textarea>
                        @error('bio')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Phone Input -->
                    <div class="input-group-custom">
                        <i class="bi bi-telephone-fill input-icon"></i>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                            value="{{ old('phone', auth()->user()->profile->phone ?? '') }}" placeholder="Masukkan nomor telepon">
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Save Button -->
                    <div class="save-button-wrapper">
                        <button type="submit" class="btn btn-custom">
                            <i class="bi bi-check-circle-fill me-2"></i>Simpan Perubahan
                        </button>
                    </div>

                    <!-- Section Divider -->
                    <div class="section-divider">
                        <span>Lokasi</span>
                    </div>

                    <!-- Address Input -->
                    <div class="mb-4">
                        <label for="address" class="form-label">
                            <i class="bi bi-geo-alt-fill"></i>Alamat
                        </label>
                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="2"
                            placeholder="Masukkan alamat Anda">{{ old('address', auth()->user()->profile->address ?? '') }}</textarea>
                        @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </form>

                <!-- Back Button -->
                <div class="back-section">
                    <a href="{{ route('dashboard') }}" class="text-link">
                        <i class="bi bi-arrow-left-circle-fill"></i>
                        <span>Kembali ke Dashboard</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const profileIcon = document.getElementById('profileIcon');
                    let profileImage = document.getElementById('profileImage');

                    // Sembunyikan icon jika ada
                    if (profileIcon) {
                        profileIcon.style.display = 'none';
                    }

                    // Tampilkan atau buat image
                    if (!profileImage) {
                        profileImage = document.createElement('img');
                        profileImage.id = 'profileImage';
                        profileImage.alt = 'Profile Photo';
                        profileImage.style.width = '100%';
                        profileImage.style.height = '100%';
                        profileImage.style.objectFit = 'cover';

                        const profilePictureWrapper = document.querySelector('.profile-picture-wrapper');
                        profilePictureWrapper.insertBefore(profileImage, profilePictureWrapper.firstChild);
                    } else {
                        profileImage.style.display = 'block';
                    }

                    profileImage.src = e.target.result;
                    
                    // Juga set ke hidden input di form update
                    const fileInputForm = document.getElementById('photoInputForm');
                    const dt = new DataTransfer();
                    dt.items.add(input.files[0]);
                    fileInputForm.files = dt.files;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        // Show file dialog when clicking on the profile picture area
        document.querySelector('.profile-picture').addEventListener('click', function(e) {
            if (!e.target.closest('.camera-indicator')) {
                document.getElementById('photoInput').click();
            }
        });

        // Juga trigger file input form ketika file dipilih
        document.getElementById('photoInput').addEventListener('change', function() {
            document.getElementById('photoInputForm').files = this.files;
        });

        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    </script>
</body>

</html>