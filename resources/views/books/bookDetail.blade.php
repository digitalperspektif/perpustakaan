@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <div class="container mt-4">
        <!-- Alert Success & Error -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="card shadow-lg">
            <div class="card-header text-white text-center" style="background-color: #115E68ff !important;">
                <h4 class="mb-0">Detail Buku</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <!-- Cover Buku -->
                        <img src="{{ asset('cover/' . $book->cover_buku) }}" alt="Cover Buku"
                            class="img-fluid rounded shadow-lg" style="max-height: 300px;">

                    </div>
                    <div class="col-md-8">
                        <h3 class="fw-bold">{{ $book->judul_buku }}</h3>
                        <p class="card-text"><strong>Jenis:</strong> {{ $book->jenis_buku }}</p>
                        <p class="card-text"><strong>No Buku:</strong> {{ $book->no_buku }}</p>
                        <p class="card-text"><strong>Penerbit:</strong> {{ $book->penerbit }}</p>
                        <p class="card-text"><strong>Tahun Terbit:</strong> {{ $book->tahun_terbit }}</p>
                        <p class="card-text"><strong>Rak:</strong> {{ $book->rak_buku }}</p>
                        <p class="card-text"><strong>Unit:</strong> {{ $book->unit }}</p>

                        <!-- Cek Status Buku -->
                        @php
                            $isBorrowed = \App\Models\Peminjaman::where('book_id', $book->id)
                                ->whereNull('tgl_kembali')
                                ->exists();
                        @endphp

                        <div class="mt-4">
                            @guest
                                <a href="{{ route('login') }}" class="btn btn-lg w-100 text-white "
                                    style="background-color: #054A53ff; border-radius: 25px;">Login untuk Pinjam Buku</a>
                            @elseif(auth()->user()->role == 'user')
                                @if ($isBorrowed)
                                    <button class="btn btn-secondary btn-lg w-100" disabled>📌 Buku ini sedang dipinjam</button>
                                @else
                                    <form action="{{ route('peminjaman.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id_user }}">
                                        <button type="submit" class="btn btn-success btn-lg w-100">📚 Pinjam Buku</button>
                                    </form>
                                @endif
                                @endif

                                <!-- Tombol Baca Buku -->
                                @if ($book->file)
                                    <a href="{{ asset('files/' . $book->file) }}" target="_blank"
                                        class="btn btn-primary btn-lg w-100 mt-2" style="border-radius: 25px;">
                                        📖 Baca Buku
                                    </a>
                                @else
                                    <button class="btn btn-secondary btn-lg w-100 mt-2" style="border-radius: 25px;" disabled>
                                        📖 Baca Buku (Tidak Tersedia)
                                    </button>
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Kembali -->
            <div class="mt-4 text-center">
                <a href="{{ route('books.allBooks') }}" class="btn btn-secondary">⬅ Kembali ke Daftar Buku</a>
            </div>
        </div>
    @endsection
