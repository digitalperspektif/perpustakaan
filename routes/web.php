<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AdminReportController;

Route::get('/', function () {
    return view('home');
});
Route::get('/allBooks', [HomeController::class, 'viewAllBooks'])->name('books.allBooks');
Route::get('/books/{id}', [HomeController::class, 'viewBookDetail'])->name('books.bookDetail');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [AuthController::class, 'showProfile'])->name('profile.show');
    Route::put('/profile', [AuthController::class, 'updateProfile'])->name('profile.update');
});

// ADMIN ROLE
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    // User Management
    Route::resource('users', AdminController::class)->names('admin.users');

    // Books Management
    Route::get('books', [AdminController::class, 'indexBook'])->name('admin.books.index');
    Route::get('books/create', [AdminController::class, 'createBook'])->name('admin.books.create');
    Route::post('books', [AdminController::class, 'storeBook'])->name('admin.books.store');
    Route::get('books/{id}', [AdminController::class, 'showBook'])->name('admin.books.show');
    Route::get('books/{id}/edit', [AdminController::class, 'editBook'])->name('admin.books.edit');
    Route::put('books/{id}', [AdminController::class, 'updateBook'])->name('admin.books.update');
    Route::delete('books/{id}', [AdminController::class, 'destroyBook'])->name('admin.books.destroy');

    // Reports (Jika ada)
    Route::get('reports', [AdminReportController::class, 'index'])->name('admin.reports.index');
    Route::get('reports/download', [AdminReportController::class, 'downloadReport'])->name('admin.reports.download');
});


// ANGGOTA ROLE
Route::middleware(['auth'])->group(function () {
    // Menampilkan Riwayat Peminjaman
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    // Proses peminjaman buku
    Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    // Proses pengembalian buku (gunakan primary key kode_pnjm)
    Route::post('/peminjaman/kembalikan/{id}', [PeminjamanController::class, 'returnBook'])->name('peminjaman.return');
});
