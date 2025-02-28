<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataAspBk;

class LibrarianBookController extends Controller
{

    public function index()
    {
        $books = DataAspBk::all();
        return view('librarian.books.index', compact('books'));
    }

    public function create()
    {
        return view('librarian.books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_buku'      => 'required|string|max:10',
            'no_buku'      => 'required|string|max:10',
            'judul_buku'   => 'required|string|max:50',
            'jenis_buku'   => 'required|string|max:255',
            'rak_buku'     => 'required|string|max:100',
            'penerbit'     => 'required|string|max:100',
            'tahun_terbit' => 'nullable|string|max:50',
            'cover_buku'   => 'nullable|string|max:255',
            'file'         => 'nullable|string|max:255',
        ]);

        DataAspBk::create($request->all());
        return redirect()->route('librarian.books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function show($id)
    {
        $book = DataAspBk::findOrFail($id);
        return view('librarian.books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = DataAspBk::findOrFail($id);
        return view('librarian.books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = DataAspBk::findOrFail($id);
        $book->update($request->all());
        return redirect()->route('librarian.books.index')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $book = DataAspBk::findOrFail($id);
        $book->delete();
        return redirect()->route('librarian.books.index')->with('success', 'Buku berhasil dihapus!');
    }
}
