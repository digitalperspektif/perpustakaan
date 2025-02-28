@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>
    <form action="{{ route('librarian.books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul_buku" class="form-control" value="{{ $book->judul_buku }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Buku</label>
            <input type="text" name="jenis_buku" class="form-control" value="{{ $book->jenis_buku }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Rak Buku</label>
            <input type="text" name="rak_buku" class="form-control" value="{{ $book->rak_buku }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="{{ $book->penerbit }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection
