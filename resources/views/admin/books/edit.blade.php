@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<h2>Edit Buku</h2>
<form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nomor Buku</label>
        <input type="text" name="no_buku" class="form-control" value="{{ $book->no_buku }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Unit</label>
        <select name="unit" class="form-control" required>
            <option value="">Pilih Unit</option>
            <option value="MANINJAU" {{ $book->unit == 'MANINJAU' ? 'selected' : '' }}>MANINJAU</option>
            <option value="SINGKARAK" {{ $book->unit == 'SINGKARAK' ? 'selected' : '' }}>SINGKARAK</option>
            <option value="BATANG AGAM" {{ $book->unit == 'BATANG AGAM' ? 'selected' : '' }}>BATANG AGAM</option>
            <option value="" {{ is_null($book->unit) ? 'selected' : '' }}>UMUM (NULL)</option>
        </select>
    </div>

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

    <div class="mb-3">
        <label class="form-label">Tahun Terbit</label>
        <input type="text" name="tahun_terbit" class="form-control" value="{{ $book->tahun_terbit }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Cover Buku</label><br>
        @if($book->cover_buku)
            <img src="{{ asset('storage/' . $book->cover_buku) }}" alt="Cover Buku" width="120" class="mb-2"><br>
        @endif
        <input type="file" name="cover_buku" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">File Buku (PDF/DOC)</label><br>
        @if($book->file)
            <a href="{{ asset('storage/' . $book->file) }}" target="_blank">Lihat File Saat Ini</a><br>
        @endif
        <input type="file" name="file" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Perbarui Buku</button>
</form>

@endsection
