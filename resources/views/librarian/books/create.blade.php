@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku</h2>
    <form action="{{ route('librarian.books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">ID Buku</label>
            <input type="text" name="id_buku" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">No Buku</label>
            <input type="text" name="no_buku" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul_buku" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Buku</label>
            <input type="text" name="jenis_buku" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Rak Buku</label>
            <input type="text" name="rak_buku" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
