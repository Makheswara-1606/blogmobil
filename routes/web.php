<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// route tombol "daftar sebagai blogger" di welcome
Route::get('/daftar-blogger', fn() => redirect()->route('verifikasi'))->name('daftar.blogger');

// route verifikasi (baca aturan)
Route::get('/verifikasi', fn() => view('verifikasi'))->name('verifikasi');

// tombol "Ya, saya setuju" di verifikasi
Route::get('/register/blogger', function () {
    if (Auth::check()) {
        Auth::logout();
        Session::flush();
    }

    Session::put('register_role', 'blogger');
    return redirect()->route('register');
})->name('register.blogger');

// ===================== //
// 📌 HANYA UNTUK USER BIASA (BUKAN BLOGGER) //
// ===================== //
Route::middleware(['auth', 'user_only'])->group(function () {
    Route::get('/dashboard', [PostController::class, 'userDashboard'])->name('dashboard');
});

// ===================== //
// 📌 HANYA UNTUK BLOGGER //
// ===================== //
Route::middleware(['auth', 'blogger'])->group(function () {
    // Dashboard blogger
    Route::get('/dashboardblog', [PostController::class, 'userPosts'])->name('dashboardblog');
    
    // CRUD posts
    Route::get('/dashboard/blog/upload', [PostController::class, 'create'])->name('posts.create');
    Route::post('/dashboard/blog/upload', [PostController::class, 'store'])->name('posts.store');
    Route::get('/dashboard/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/dashboard/blog/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/dashboard/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// ===================== //
// 📌 HANYA UNTUK ADMIN //
// ===================== //
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    
    // User management
    Route::delete('/admin/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
    Route::put('/admin/users/{id}/role', [AdminController::class, 'updateUserRole'])->name('admin.users.role');
    
    // Category management
    Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::put('/admin/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');
});

// ===================== //
// 📌 PROFILE ROUTES - UNTUK SEMUA USER YANG LOGIN //
// ===================== //
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/halamanProfile', [ProfileController::class, 'show'])->name('halamanProfile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/photo/delete', [ProfileController::class, 'deletePhoto'])->name('profile.photo.delete');
    
    // Halaman umum yang bisa diakses semua user yang login
    Route::get('/tentang', [PostController::class, 'tentang'])->name('tentang');
    Route::get('/kontak', [PostController::class, 'kontak'])->name('kontak');
    Route::post('/kontak', [PostController::class, 'kirimPesan'])->name('kontak.kirim');
});

// ===================== //
// 📌 BAGIAN POST / BLOG - PUBLIK //
// ===================== //
Route::get('/artikel', [PostController::class, 'index'])->name('artikel');
Route::get('/artikel/{slug}', [PostController::class, 'show'])->name('artikel.show');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('blog.show');

require __DIR__ . '/auth.php';