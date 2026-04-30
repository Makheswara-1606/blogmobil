<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.7-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>OTO BLOG - Buat Artikel Baru</title>
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
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: #9d1518;
            border-color: #9d1518;
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }

        /* Form Styling */
        .form-container {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text-dark);
        }

        .form-control,
        .form-select {
            padding: 10px 15px;
            border-radius: 6px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(186, 24, 27, 0.25);
        }

        .editor-container {
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .editor-toolbar {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            background-color: #f8f9fa;
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }

        .editor-toolbar button {
            background: none;
            border: 1px solid transparent;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .editor-toolbar button:hover {
            background-color: #e9ecef;
        }

        .editor-content {
            min-height: 300px;
            padding: 15px;
            outline: none;
        }

        .image-upload {
            border: 2px dashed #ddd;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            margin-bottom: 20px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .image-upload:hover {
            border-color: var(--primary-color);
        }

        .image-preview {
            max-width: 100%;
            margin-top: 15px;
            display: none;
            border-radius: 6px;
        }

        .tag-input-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tag {
            background-color: #e9ecef;
            padding: 5px 12px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .tag-remove {
            cursor: pointer;
            font-size: 14px;
        }

        .tag-input {
            border: none;
            outline: none;
            padding: 5px;
            flex-grow: 1;
            min-width: 100px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
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

            .page-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .form-actions {
                flex-direction: column;
            }

            .form-actions .btn {
                width: 100%;
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
                        <div class="user-avatar">U</div>
                        <span class="d-none d-md-inline">Username</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="{{ route('halamanProfile') }}">Profil Saya</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('welcome') }}">Logout/Keluar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="dashboard-container">
        <div class="page-title">
            <h2>Buat Artikel Baru</h2>
            <a href="{{ route('dashboardblog') }}" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left"></i> Kembali ke Dashboard
            </a>
        </div>

        <div class="form-container">
            <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($post))
                @method('PUT')
                @endif

                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $post->title ?? '') }}">
                </div>

                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ (old('category_id', $post->category_id ?? '') == $cat->id) ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>Konten</label>
                    <textarea name="content" class="form-control" rows="8">{{ old('content', $post->content ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control">
                    @if(isset($post) && $post->thumbnail)
                    <img src="{{ asset('storage/'.$post->thumbnail) }}" alt="" width="120" class="mt-2">
                    <!-- Debug: {{ $post->thumbnail }} -->
                    @endif
                </div>

                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="draft" {{ old('status', $post->status ?? '') == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $post->status ?? '') == 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ isset($post) ? 'Update Post' : 'Upload Post' }}
                </button>
            </form>

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
    <script>
        // Format text in editor
        function formatText(command, value = null) {
            document.execCommand(command, false, value);
            document.getElementById('articleContent').focus();
        }

        // Image upload functionality
        const imageUpload = document.getElementById('imageUpload');
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');

        imageUpload.addEventListener('click', () => {
            imageInput.click();
        });

        imageInput.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                    imageUpload.querySelector('p').textContent = 'Ganti gambar';
                };
                reader.readAsDataURL(file);
            }
        });

        // Allow drag and drop for image upload
        imageUpload.addEventListener('dragover', (e) => {
            e.preventDefault();
            imageUpload.style.borderColor = '#BA181B';
            imageUpload.style.backgroundColor = '#f8f9fa';
        });

        imageUpload.addEventListener('dragleave', (e) => {
            e.preventDefault();
            imageUpload.style.borderColor = '#ddd';
            imageUpload.style.backgroundColor = 'white';
        });

        imageUpload.addEventListener('drop', (e) => {
            e.preventDefault();
            imageUpload.style.borderColor = '#ddd';
            imageUpload.style.backgroundColor = 'white';

            const file = e.dataTransfer.files[0];
            if (file && file.type.startsWith('image/')) {
                imageInput.files = e.dataTransfer.files;
                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                    imageUpload.querySelector('p').textContent = 'Ganti gambar';
                };
                reader.readAsDataURL(file);
            }
        });

        // Tag functionality
        const tagInput = document.getElementById('tagInput');
        const tagsContainer = document.getElementById('tagsContainer');
        const tags = [];

        tagInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' && tagInput.value.trim() !== '') {
                e.preventDefault();
                addTag(tagInput.value.trim());
                tagInput.value = '';
            }
        });

        function addTag(tagText) {
            if (tags.includes(tagText)) return;

            tags.push(tagText);

            const tagElement = document.createElement('div');
            tagElement.className = 'tag';
            tagElement.innerHTML = `
                ${tagText}
                <span class="tag-remove" onclick="removeTag('${tagText}')">×</span>
            `;

            tagsContainer.appendChild(tagElement);
        }

        function removeTag(tagText) {
            const index = tags.indexOf(tagText);
            if (index > -1) {
                tags.splice(index, 1);
            }

            // Rebuild tags display
            tagsContainer.innerHTML = '';
            tags.forEach(tag => {
                const tagElement = document.createElement('div');
                tagElement.className = 'tag';
                tagElement.innerHTML = `
                    ${tag}
                    <span class="tag-remove" onclick="removeTag('${tag}')">×</span>
                `;
                tagsContainer.appendChild(tagElement);
            });
        }
    </script>
</body>

</html>