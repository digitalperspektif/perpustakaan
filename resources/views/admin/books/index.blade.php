@extends('layouts.app')

@section('title', 'Kelola Buku')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">📚 Kelola Data Buku</h2>

    <!-- Notifikasi -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif


    <!-- Fitur Pencarian & Tambah Buku -->
    <div class="card shadow-sm p-3 mb-4">
        <form method="GET" action="{{ route('admin.books.index') }}">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="search" class="form-control"
                           placeholder="🔍 Cari berdasarkan judul atau penerbit..." value="{{ request('search') }}">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary w-100">Cari</button>
                </div>
                <div class="col-md-3 text-end">
                    <a href="{{ route('admin.books.create') }}" class="btn btn-success w-100">➕ Tambah Buku</a>
                </div>
            </div>
        </form>
    </div>

    <!-- Tabel Data Buku -->
    <div class="table-responsive shadow-sm">
        <table class="table table-striped table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Jenis</th>
                    <th>Rak</th>
                    <th>Unit</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                @forelse($books as $book)
                <tr>
                    <td class="text-center">{{ $book->id }}</td>
                    <td>{{ $book->judul_buku }}</td>
                    <td>{{ $book->jenis_buku }}</td>
                    <td class="text-center">{{ $book->rak_buku }}</td>
                    <td>{{ $book->unit }}</td>
                    <td>{{ $book->penerbit }}</td>
                    <td class="text-center">
                        <a href="/books/{{ $book->id }}" class="btn btn-info btn-sm">📖 Detail</a>
                        <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                        <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus buku ini?')">🗑️ Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">⚠️ Data tidak ditemukan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-3">
        {{ $books->links() }}
    </div>
</div>
@endsection
