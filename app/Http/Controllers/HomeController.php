<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataAspBk;

class HomeController extends Controller
{
    public function viewAllBooks(Request $request)
    {
        $search = $request->query('search');

        $books = DataAspBk::when($search, function ($query, $search) {
                return $query->where('judul_buku', 'like', "%{$search}%");
            })->paginate(9);

        return view('books.allBooks', compact('books'));
    }

    public function viewBookDetail($id)
    {
        $book = DataAspBk::findOrFail($id);
        return view('books.bookDetail', compact('book'));
    }
}
