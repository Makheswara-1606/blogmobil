<div align="center">
  
# OTOBLOG
Website ini menjadi wadah berbagi informasi terbaru, tips, dan ulasan mendalam seputar dunia otomotif dari para ahli dan penggemar.

<img width="1240" height="3300" alt="image" src="https://github.com/user-attachments/assets/f0e6bb5e-3255-4c69-9dfc-e159cd8ba9dd" />

<br>
<br>

## ⭐ Apa Yang Akan Anda Temui Di Blog Kami?
</div>

### 👥 User 
- Informasi terkini seputar dunia otomotif <br>
- Jawaban untuk pertanyaan yang mungkin ada di benak Anda <br>
- Terdapat fitur komentar, sehingga otoblog dapat menjadi tempat berbagi pengalaman dan pengetahuan <br>
- Tips perawatan kendaraan dari para ahli <br>
- Ulasan mendalam tentang model kendaraan terbaru <br>

<img width="1240" height="2867" alt="Screenshot_29-9-2026_193349_127 0 0 1" src="https://github.com/user-attachments/assets/88f13984-bb34-44a7-8cc0-8afcc48d3798" />

<br>

### 👤 Admin
- Memantau akun para _blogger_ dan _user_  <br>
- Memantau postingan yang terdapat pada platform <br>
 
<img width="1240" height="1749" alt="Screenshot_29-9-2026_193435_127 0 0 1" src="https://github.com/user-attachments/assets/02cea3d1-6774-490d-8254-40b6c9df8c33" />


<br>

<div align="center"> 
  
## ❓ Cara menggunakan: 

</div>
<br>

Website ini dapat diakses secara _local_. Pastikan prasyarat berikut telah terinstal di sistem Anda:

| Komponen | Versi | Link Download |
|----------|-------|---------------|
| **Laragon** / XAMPP | Latest | [laragon.org](https://laragon.org/download/) / [apachefriends.org](https://www.apachefriends.org) |
| **Git** | Latest | [git-scm.com](https://git-scm.com/downloads) |
| **Laravel** | `v12` | [laravel.com/docs/12.x](https://laravel.com/docs/12.x) |
| **PHP** | `v8.3.21` | [php.net](https://www.php.net/downloads) |

<br>

 💡 **Catatan:** 
> - Disarankan menggunakan **Laragon** untuk pengalaman pengembangan yang lebih ringan dan modern

<br>

### Cara menjalankan website di local:
#### 1. Instalasi <br>
- Buka terminal Laragon (disarankan), atau terminal lainnya.
- Arahkan ke folder yang akan Anda gunakan untuk menyimpan folder, contoh: ```cd C:\laragon\www```
- Jalankan perintah <i>clone</i>: ```git clone https://github.com/Makheswara-1606/blogmobil/``` <br>

#### 2. _Run website:_ <br>
Setelah proses _clone_ selesai, Anda dapat me-_running_ website tersebut dengan langkah berikut:
- Buka terminal Laragon (disarankan), atau terminal lainnya.
- Arahakan ke folder hasil _clone_, contoh: ```cd C:\laragon\www\blogmobil```
- Jalankan perintah ```npm run dev```
- Buka tab baru pada terminal, lalu jalankan lagi perintah ```php artisan serve```
- Setelah itu, Anda dapat membuka link yang seperti ini ``` INFO  Server running on [http://127.0.0.1:8000]``` dengan CTRL + Click

<br>

💡 **Catatan:** 
> - Seringkali ada error saat pertama kali di _run_, maka disarankan untuk jalankan ```install composer``` terlebih dahulu.

<br>

<div align="center">

  ## 📂 Struktur Folder
  
</div>

```text
📂 app
📂 bootstrap
📂 config
📂 database
📂 public
📂 resources
📂 routes
📂 storage
📂 tests
📄 .editorconfig
📄 .env.example
📄 .gitattributes
📄 .gitignore
📄 README.md
📄 artisan
📄 composer.json
📄 composer.lock
📄 package-lock.json
📄 package.json
📄 phpunit.xml
📄 postcss.config.js
📄 tailwind.config.js
📄 vite.config.js
```

<br>

### 💡 Catatan:
> - Folder `vendor/`, `node_modules/`, dan file `.env` **tidak boleh di-upload ke GitHub**. Pastikan file `.gitignore` sudah mengaturnya.
> - Untuk menjalankan proyek, copy `.env.example` menjadi `.env`, lalu jalankan `php artisan key:generate`.
