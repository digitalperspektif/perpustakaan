@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>


    <h2 class="text-center">Daftar Buku</h2>
    <form action="{{ route('books.allBooks') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari buku..."
                value="{{ request('search') }}">
            <select name="unit" class="form-select">
                <option value="">Semua Rak</option>
                @foreach ($units as $unit)
                    <option value="{{ $unit }}" {{ request('unit') == $unit ? 'selected' : '' }}>{{ $unit }}
                    </option>
                @endforeach
            </select>
            <button class="btn btn-primary">Cari</button>
        </div>
    </form>


    <div class="row">
        @forelse ($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->judul_buku }}</h5>
                        <p class="card-text"><strong>Jenis:</strong> {{ $book->jenis_buku }}</p>
                        <p class="card-text"><strong>Penerbit:</strong> {{ $book->penerbit }}</p>
                        <p class="card-text"><strong>Rak:</strong> {{ $book->rak_buku }}</p>
                        <p class="card-text"><strong>Unit:</strong> {{ $book->unit }}</p>
                        <a href="/books/{{ $book->id }}" class="btn btn-sm"
                            style="background-color: #054A53ff; color: white;">Lihat Detail</a>
                    </div>
                </div>
            </div>

        @empty
            <div class="card alert alert-danger">
                <div class="card-body">
                    <h5 class="text-center">⚠️ Mohon maaf, data yang dicari tidak ditemukan.</h5>
                </div>
            </div>
        @endforelse
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $books->links() }}
    </div>
@endsection
