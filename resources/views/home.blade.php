@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container position-relative mt-5">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Selamat Datang!</h2>
          <p>Selamat datang di Aplikasi Perpustakaan PT PLN INDONESIA POWER.
            Dengan aplikasi ini, Anda dapat mencari buku, melakukan peminjaman, mengembalikan buku, serta melihat riwayat peminjaman Anda.
            Silakan masuk dengan akun yang telah terdaftar untuk menggunakan layanan perpustakaan.
          </p>
          <a href="{{ route('books.allBooks') }}">
             <button class="btn" style="background-color: #054A53ff; color: white;">Cari Buku</button>
          </a>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('images/book_home.png') }}" class="img-fluid" alt="Gambar Perpustakaan" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>
@endsection
