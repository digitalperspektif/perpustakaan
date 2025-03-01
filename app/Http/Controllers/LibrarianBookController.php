<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataAspBk;
use App\Models\Peminjaman;

class LibrarianBookController extends Controller
{

    public function index(Request $request)
    {
        $query = DataAspBk::query();

        // Fitur Search berdasarkan Judul Buku atau Penerbit
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('judul_buku', 'LIKE', "%$search%")
                  ->orWhere('penerbit', 'LIKE', "%$search%");
        }

        // Pagination (max 10 data per halaman)
        $books = $query->paginate(10);

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

    // public function destroy($id)
    // {
    //     $book = DataAspBk::findOrFail($id);
    //     $book->delete();
    //     return redirect()->route('librarian.books.index')->with('success', 'Buku berhasil dihapus!');
    // }

    public function destroy($id)
{
    $book = DataAspBk::findOrFail($id);

    // Cek apakah buku sedang dipinjam
    $isBeingBorrowed = Peminjaman::where('book_id', $book->id)
                                 ->whereNull('tgl_kembali') // Belum dikembalikan
                                 ->exists();

    if ($isBeingBorrowed) {
        return redirect()->route('librarian.books.index')
                         ->with('error', '❌ Tidak dapat menghapus buku, karena buku sedang dipinjam!');
    }

    $book->delete();
    return redirect()->route('librarian.books.index')->with('success', '✅ Buku berhasil dihapus!');
}

}


