<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataAspBk;

class HomeController extends Controller
{
    public function viewAllBooks(Request $request)
    {
        $search = $request->query('search');
        $unit = $request->query('unit');

        // Ambil daftar unit unik untuk dropdown, jika null maka tampilkan "Umum"
        $units = DataAspBk::selectRaw("COALESCE(unit, 'UMUM') as unit")
            ->distinct()
            ->pluck('unit');

        $books = DataAspBk::when($search, function ($query, $search) {
            return $query->where('judul_buku', 'like', "%{$search}%");
        })
            ->when($unit, function ($query, $unit) {
                if ($unit === 'UMUM') {
                    return $query->whereNull('unit');
                }
                return $query->where('unit', $unit);
            })
            ->paginate(9);

        return view('books.allBooks', compact('books', 'units'));
    }



    public function viewBookDetail($id)
    {
        $book = DataAspBk::findOrFail($id);
        return view('books.bookDetail', compact('book'));
    }
}
