<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\LibrarianMiddleware;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\LibrarianBookController;
use App\Http\Controllers\LibrarianReportController;

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
    Route::resource('/users', AdminController::class)->names('admin.users');
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


// LIBRARIAN ROLE
Route::middleware(['auth', LibrarianMiddleware::class])->prefix('librarian')->group(function () {
    // CRUD Data Buku
    Route::resource('books', LibrarianBookController::class)->names('librarian.books');

    // Laporan peminjaman
    // Route::get('reports', [LibrarianReportController::class, 'index'])->name('librarian.reports.index');
    Route::get('/librarian/reports', [LibrarianReportController::class, 'index'])->name('librarian.reports.index');
    Route::get('/librarian/reports/download', [LibrarianReportController::class, 'downloadReport'])->name('librarian.reports.download');


    // Opsional: lihat semua data peminjaman
    Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('librarian.peminjaman.index');
});
