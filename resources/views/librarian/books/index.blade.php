@extends('layouts.app')
@section('title', 'Data Buku')
@section('content')
    <h2>Data Buku</h2>
    <a href="{{ route('librarian.books.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
         <thead>
              <tr>
                   <th>ID</th>
                   <th>Judul Buku</th>
                   <th>Jenis</th>
                   <th>Rak</th>
                   <th>Penerbit</th>
                   <th>Aksi</th>
              </tr>
         </thead>
         <tbody>
              @foreach($books as $book)
              <tr>
                   <td>{{ $book->id }}</td>
                   <td>{{ $book->judul_buku }}</td>
                   <td>{{ $book->jenis_buku }}</td>
                   <td>{{ $book->rak_buku }}</td>
                   <td>{{ $book->penerbit }}</td>
                   <td>
                        <a href="{{ route('librarian.books.show', $book->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('librarian.books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('librarian.books.destroy', $book->id) }}" method="POST" class="d-inline">
                             @csrf
                             @method('DELETE')
                             <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus buku ini?')">Hapus</button>
                        </form>
                   </td>
              </tr>
              @endforeach
         </tbody>
    </table>
@endsection
