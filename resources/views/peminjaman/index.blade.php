@extends('layouts.app')

@section('title', 'Riwayat Peminjaman')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">📖 Riwayat Peminjaman</h2>

    <!-- Alert Notifikasi -->
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- Fitur Pencarian -->
    <div class="card shadow-sm p-3 mb-4">
        <form method="GET" action="{{ route('peminjaman.index') }}">
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label">🔍 Cari Judul Buku</label>
                    <input type="text" name="search" class="form-control"
                           placeholder="Masukkan judul buku..." value="{{ request('search') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">📅 Tanggal Pinjam (Dari)</label>
                    <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">📅 Tanggal Pinjam (Sampai)</label>
                    <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">🔍 Cari</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Validasi Jika Tidak Pernah Pinjam atau Kembali -->
    @if ($totalRiwayat === 0)
        <div class="alert alert-warning text-center">
            ⚠️ Maaf, Anda tidak pernah memiliki riwayat peminjaman buku.
        </div>
    @else
        <!-- Buku yang Sedang Dipinjam -->
        <h3 class="mt-4">📌 Buku yang Sedang Dipinjam</h3>
        @if ($peminjaman->isEmpty() && request()->has('search'))
            <div class="alert alert-danger text-center">⚠️ Maaf, data yang Anda cari tidak ditemukan.</div>
        @elseif ($peminjaman->isEmpty())
            <p class="text-muted">Tidak ada buku yang sedang dipinjam.</p>
        @else
            <table class="table table-striped table-hover shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjaman as $p)
                        <tr>
                            <td>{{ $p->book->judul_buku }}</td>
                            <td>{{ date('d M Y', strtotime($p->tgl_pinjam)) }}</td>
                            <td>
                                <a href="{{ route('books.bookDetail', ['id' => $p->book_id]) }}" class="btn btn-info btn-sm">📚 Lihat Detail</a>
                                <form action="{{ route('peminjaman.return', ['id' => $p->kode_pnjm]) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-warning btn-sm">🔄 Kembalikan</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $peminjaman->links() }}
            </div>
        @endif

        <!-- Buku yang Sudah Dikembalikan -->
        <h3 class="mt-4">✅ Buku yang Sudah Dikembalikan</h3>
        @if ($pengembalian->isEmpty() && request()->has('search'))
            <div class="alert alert-danger text-center">⚠️ Maaf, data yang Anda cari tidak ditemukan.</div>
        @elseif ($pengembalian->isEmpty())
            <p class="text-muted">Tidak ada buku yang sudah dikembalikan.</p>
        @else
            <table class="table table-striped table-hover shadow-sm">
                <thead class="table-success">
                    <tr>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengembalian as $p)
                        <tr>
                            <td>{{ $p->book->judul_buku }}</td>
                            <td>{{ date('d M Y', strtotime($p->tgl_pinjam)) }}</td>
                            <td>{{ date('d M Y', strtotime($p->tgl_kembali)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $pengembalian->links() }}
            </div>
        @endif
    @endif
</div>
@endsection
