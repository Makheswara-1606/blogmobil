<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Blogger - OTOBLOG</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            background-color: #fff;
        }

        .verification-box {
            border: 2px solid #ddd;
            border-radius: 12px;
            padding: 25px;
            margin: 50px auto;
            max-width: 700px;
            background: #fff;
            font-family: "Open Sans", sans-serif;
        }

        .verification-title {
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            font-family: "Poppins", sans-serif;
            padding: 50px 50px;
            margin-bottom: 25px;
        }

        .btn-agree {
            background-color: #BA181B;
            color: #fff;
            font-weight: 600;
            width: 100%;
            border-radius: 8px;
            padding: 12px;
        }

        .btn-agree:hover {
            background-color: #a51214;
            color: #fff;
        }

        footer {
            background-color: black;
            color: #fff;
            padding: 25px 0;
            margin-top: 40px;
        }

        footer h2 {
            font-weight: 700;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <p class="verification-title">
            Baca persyaratan tersebut terlebih dahulu <br>
            sebelum anda menjadi seorang blogger
        </p>

        <div class="verification-box">
            <form>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="rule1">
                    <label class="form-check-label" for="rule1">
                        Setiap artikel yang anda bagikan tidak boleh mengandung topik SARA, rasisme atau diskriminasi lainnya
                    </label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="rule2">
                    <label class="form-check-label" for="rule2">
                        Artikel harus membawa topik yang berbobot dan menarik untuk para pembaca demi menjaga rating website ini
                    </label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="rule3">
                    <label class="form-check-label" for="rule3">
                        Blogger harus menaati hukum hak cipta yang di mana blogger di larang untuk men-jiplak karya tulis ilmiah dari blogger lain.
                    </label>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="rule4">
                    <label class="form-check-label" for="rule4">
                        Jika salah satu artikel nya sudah mencapai 100 views, bloggers wajib membayar royalti sebesar Rp. 50.000,00 kepada sang web developer sebagai pajak upload artikel. Atau blogger tidak akan bisa mengupload artikel nya lagi.
                    </label>
                </div>

                <a href="{{ route('register.blogger') }}" class="btn btn-agree">Ya, saya Setuju</a>
            </form>
        </div>
    </div>

    <footer class="text-white pt-5 pb-4 mt-5">
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
                    <p><a href="#" class="text-white text-decoration-none">Home</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Artikel</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Tentang</a></p>
                    <p><a href="#" class="text-white text-decoration-none">Kontak</a></p>
                </div>

                <!-- Contact -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold">Kontak</h5>
                    <p><i class="bi bi-house-door me-2"></i>Depok, Indonesia</p>
                    <p><i class="bi bi-envelope me-2"></i>otoblog@example.com</p>
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


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>