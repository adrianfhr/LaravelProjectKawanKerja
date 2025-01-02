<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;

// Halaman utama arah ke dashboard jika sudah login
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Dashboard (Hanya untuk pengguna yang sudah login)
Route::get('/dashboard', function () {
    return view('dashboard.index'); // Dashboard utama
})->middleware('auth')->name('dashboard');

// Login (Hanya untuk tamu)
Route::get('/login', function () {
    return view('auth.login'); // Custom login view dengan AdminLTE
})->middleware('guest')->name('login');

// Register (Hanya untuk tamu)
Route::get('/register', function () {
    return view('auth.register'); // View register menggunakan AdminLTE
})->middleware('guest')->name('register');

// Proses Login
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

// Proses Register
Route::post('/register', [RegisterController::class, 'store'])->name('register.post');

// Logout (Hanya untuk pengguna yang sudah login)
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// Resourceful route untuk Post harus authenticated
Route::get('/posts', [PostController::class, 'index'])->middleware('auth')->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth')->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth')->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth')->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('auth')->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('auth')->name('posts.destroy');
?>
