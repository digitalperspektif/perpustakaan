@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h2>Detail Buku</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $book->judul_buku }}</h5>
            <p class="card-text"><strong>Jenis:</strong> {{ $book->jenis_buku }}</p>
            <p class="card-text"><strong>No Buku:</strong> {{ $book->no_buku }}</p>
            <p class="card-text"><strong>Penerbit:</strong> {{ $book->penerbit }}</p>
            <p class="card-text"><strong>Rak:</strong> {{ $book->rak_buku }}</p>
            <a href="{{ route('librarian.books.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
