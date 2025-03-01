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
        <input type="text" name="search" class="form-control" placeholder="Cari buku..." value="{{ request('search') }}">
        <button class="btn btn-primary">Cari</button>
    </div>
</form>

    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->judul_buku }}</h5>
                        <p class="card-text"><strong>Jenis:</strong> {{ $book->jenis_buku }}</p>
                        <p class="card-text"><strong>Penerbit:</strong> {{ $book->penerbit }}</p>
                        <p class="card-text"><strong>Rak:</strong> {{ $book->rak_buku }}</p>
                        <a href="/books/{{ $book->id }}" class="btn btn-sm" style="background-color: #0C3C01; color: white;">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $books->links() }}
    </div>
@endsection
