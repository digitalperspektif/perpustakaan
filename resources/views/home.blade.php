@extends('layouts.app')
@section('title', 'Home')
@section('content')

<style>
    .hero-section {
        position: relative;
        width: 100vw;
        height: 100vh;
        margin-left: calc(-50vw + 50%);
        background-image: url('{{ asset('images/bg_kantor.jpeg') }}');
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        color: white;
        text-align: center;

    }

    .hero-content h2 {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .hero-content p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        margin-left: 20%;
        margin-right: 20%;
    }

    .hero-content .btn {
        padding: 10px 30px;
        font-size: 1.2rem;
        border-radius: 30px;
    }

    @media (max-width: 768px) {
        .hero-content h2 {
            font-size: 2rem;
        }

        .hero-content p {
            font-size: 1rem;
        }
    }
</style>

<div class="hero-section">
    <div class="overlay"></div>
    <div class="hero-content" data-aos="fade-in">
        <h2>Selamat Datang!</h2>
        <p>Selamat datang di Aplikasi Perpustakaan PT PLN INDONESIA POWER UBP BUKITTINGGI.
            Dengan aplikasi ini, Anda dapat mencari buku, melakukan peminjaman, mengembalikan buku, serta melihat riwayat peminjaman Anda.
            Silakan masuk dengan akun yang telah terdaftar untuk menggunakan layanan perpustakaan.
        </p>
        <a href="{{ route('books.allBooks') }}">
            <button class="btn" style="background-color: #054A53ff; color: white;">Cari Buku</button>
        </a>
    </div>
</div>

@endsection
