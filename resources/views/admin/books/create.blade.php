@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<h2>Tambah Buku</h2>
<form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nomor Buku</label>
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
    <div class="mb-3">
        <label class="form-label">Tahun Terbit</label>
        <input type="text" name="tahun_terbit" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">Unit</label>
    <select name="unit" class="form-control" required>
        <option value="">Pilih Unit</option>
        <option value="MANINJAU">MANINJAU</option>
        <option value="SINGKARAK">SINGKARAK</option>
        <option value="BATANG AGAM">BATANG AGAM</option>
        <option value="" selected>UMUM (NULL)</option>
    </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Cover Buku</label>
        <input type="file" name="cover_buku" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">File Buku (PDF/DOC)</label>
        <input type="file" name="file" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
