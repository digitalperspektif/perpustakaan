@extends('layouts.app')
@section('title', 'Laporan Peminjaman')
@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Laporan Peminjaman Buku</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card p-4 shadow-lg">
        {{-- Form Pencarian & Filter --}}
        <form action="{{ route('admin.reports.index') }}" method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="judul_buku" class="form-control" placeholder="Cari Judul Buku" value="{{ request('judul_buku') }}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="username" class="form-control" placeholder="Cari User" value="{{ request('username') }}">
                </div>
                <div class="col-md-2">
                    <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" value="{{ request('tgl_pinjam') }}">
                </div>
                <div class="col-md-2">
                    <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="date" id="tgl_kembali" name="tgl_kembali" class="form-control" value="{{ request('tgl_kembali') }}">
                </div>
                <div class="col-md-2">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">-- Pilih Status --</option>
                        <option value="dipinjam" {{ request('status') == 'dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                        <option value="dikembalikan" {{ request('status') == 'dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                    </select>
                </div>
            </div>
            <div class="text-end mt-3">
                <button type="submit" class="btn btn-primary">Cari</button>
                <a href="{{ route('admin.reports.index') }}" class="btn btn-secondary">Reset</a>
            </div>
        </form>

        {{-- Tabel Laporan Peminjaman --}}
        @if($peminjaman->isEmpty())
            <p class="text-center text-muted">Tidak ada laporan peminjaman buku.</p>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID Peminjaman</th>
                            <th>Judul Buku</th>
                            <th>User</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peminjaman as $p)
                            <tr>
                                <td>{{ $p->kode_pnjm }}</td>
                                <td>{{ $p->book->judul_buku }}</td>
                                <td>{{ $p->user->username }}</td>
                                <td>{{ $p->tgl_pinjam }}</td>
                                <td>{{ $p->tgl_kembali ?? '-' }}</td>
                                <td>
                                    <span class="badge {{ $p->aksi == 'Dipinjam' ? 'bg-warning text-dark' : 'bg-success' }}">
                                        {{ ucfirst($p->aksi) }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {{ $peminjaman->links() }}
            </div>

            {{-- Tombol Download Laporan --}}
            <div class="text-end mt-3">
                <a href="{{ route('admin.reports.download') }}" class="btn btn-success">
                    Download Laporan Excel
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
