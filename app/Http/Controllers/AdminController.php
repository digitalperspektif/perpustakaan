<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Peminjaman;
use App\Models\DataAspBk;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    // ==================== USER ====================
    public function index(Request $request)
    {
        $search = $request->input('search');

        $users = User::when($search, function ($query, $search) {
            return $query->where('username', 'like', "%$search%")
                ->orWhere('unit', 'like', "%$search%");
        })
            ->orderBy('id_user', 'asc')
            ->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:tab_login,username',
            'password' => 'required|string|min:6',
            'role'     => 'required|in:admin,user',
            'unit'     => 'required|in:PLTA Singkarak,PLTA Maninjau,PLTA Batang Agam,PT PLN IP UBP Bukittinggi',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
            'unit'     => $request->unit,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:tab_login,username,' . $user->id_user . ',id_user',
            'password' => 'nullable|string|min:6',
            'role'     => 'required|in:admin,user',
            'unit'     => 'required|in:PLTA Singkarak,PLTA Maninjau,PLTA Batang Agam,PT PLN IP UBP Bukittinggi',
        ]);

        $data = $request->only(['username', 'role', 'unit']);
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);
        return redirect()->route('admin.users.index')->with('success', 'User berhasil diperbarui!');
    }

    public function destroy(User $user)
    {
        $isBorrowing = Peminjaman::where('user_id', $user->id_user)
            ->whereNull('tgl_kembali')
            ->exists();

        if ($isBorrowing) {
            return redirect()->route('admin.users.index')->with('error', '❌ Tidak dapat menghapus user, masih ada peminjaman!');
        }

        $user->delete();
        return redirect()->route('admin.users.index')->with('success', '✅ User berhasil dihapus!');
    }

    // ==================== BOOKS ====================
    public function indexBook(Request $request)
    {
        $query = DataAspBk::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('judul_buku', 'LIKE', "%$search%")
                ->orWhere('penerbit', 'LIKE', "%$search%");
        }

        $books = $query->paginate(10);
        return view('admin.books.index', compact('books'));
    }

    public function createBook()
    {
        return view('admin.books.create');
    }

    public function storeBook(Request $request)
    {
        $request->validate([
            'no_buku'      => 'required|string|max:10',
            'judul_buku'   => 'required|string|max:100',
            'jenis_buku'   => 'required|string|max:50',
            'rak_buku'     => 'required|string|max:50',
            'penerbit'     => 'required|string|max:100',
            'tahun_terbit' => 'nullable|string|max:4',
            'unit'         => 'nullable|in:MANINJAU,SINGKARAK,BATANG AGAM',
            'cover_buku'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'file'         => 'nullable|mimes:pdf|max:5120', // max 5MB
        ]);


        // Inisialisasi nama file (jika ada)
        $coverName = null;
        $fileName = null;

        // Proses Upload Cover Buku
        if ($request->hasFile('cover_buku')) {
            $coverFile = $request->file('cover_buku');
            $coverName = now()->format('Ymd') . '_' . Str::slug($request->judul_buku, '_') . '_cover.' . $coverFile->getClientOriginalExtension();
            $coverFile->move(public_path('/cover'), $coverName);
        }

        // Proses Upload File PDF
        if ($request->hasFile('file')) {
            $pdfFile = $request->file('file');
            $fileName = now()->format('Ymd') . '_' . Str::slug($request->judul_buku, '_') . '_file.' . $pdfFile->getClientOriginalExtension();
            $pdfFile->move(public_path('/files'), $fileName);
        }

        // Simpan data ke database
        DataAspBk::create([
            'no_buku'      => $request->no_buku,
            'judul_buku'   => $request->judul_buku,
            'jenis_buku'   => $request->jenis_buku,
            'rak_buku'     => $request->rak_buku,
            'penerbit'     => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'unit'         => $request->unit ?: null, // Jika kosong, simpan sebagai NULL
            'cover_buku'   => $coverName,
            'file'         => $fileName,
        ]);

        return redirect()->route('admin.books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function updateBook(Request $request, $id)
    {

        $request->validate([
            'no_buku'      => 'required|string|max:10',
            'judul_buku'   => 'required|string|max:100',
            'jenis_buku'   => 'required|string|max:50',
            'rak_buku'     => 'required|string|max:50',
            'penerbit'     => 'required|string|max:100',
            'tahun_terbit' => 'nullable|string|max:4',
            'unit'         => 'nullable|in:MANINJAU,SINGKARAK,BATANG AGAM',
            'cover_buku'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'file'         => 'nullable|mimes:pdf|max:5120',
        ]);


        // Ambil data lama
        $data = DataAspBk::findOrFail($id);

        // Proses Upload Cover Baru Jika Ada
        if ($request->hasFile('cover_buku')) {
            // Hapus file lama jika ada
            if ($data->cover_buku && file_exists(public_path('/cover/' . $data->cover_buku))) {
                unlink(public_path('/cover/' . $data->cover_buku));
            }
            $coverFile = $request->file('cover_buku');
            $coverName = now()->format('Ymd') . '_' . Str::slug($request->judul_buku, '_') . '_cover.' . $coverFile->getClientOriginalExtension();
            $coverFile->move(public_path('/cover'), $coverName);
            $data->cover_buku = $coverName;
        }

        // Proses Upload File PDF Baru Jika Ada
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($data->file && file_exists(public_path('/files/' . $data->file))) {
                unlink(public_path('/files/' . $data->file));
            }
            $pdfFile = $request->file('file');
            $fileName = now()->format('Ymd') . '_' . Str::slug($request->judul_buku, '_') . '_file.' . $pdfFile->getClientOriginalExtension();
            $pdfFile->move(public_path('/files'), $fileName);
            $data->file = $fileName;
        }

        // Update data lainnya
        $data->no_buku      = $request->no_buku;
        $data->judul_buku   = $request->judul_buku;
        $data->jenis_buku   = $request->jenis_buku;
        $data->rak_buku     = $request->rak_buku;
        $data->penerbit     = $request->penerbit;
        $data->tahun_terbit = $request->tahun_terbit;
        $data->unit         = $request->unit ?: null; // Jika kosong, simpan sebagai NULL
        $data->save();


        return redirect()->route('admin.books.index')->with('success', 'Buku berhasil diperbarui!');
    }

    public function showBook($id)
    {
        $book = DataAspBk::findOrFail($id);
        return view('admin.books.show', compact('book'));
    }

    public function editBook($id)
    {
        $book = DataAspBk::findOrFail($id);
        return view('admin.books.edit', compact('book'));
    }

    public function destroyBook($id)
    {
        $book = DataAspBk::findOrFail($id);
        $isBeingBorrowed = Peminjaman::where('book_id', $book->id)
            ->whereNull('tgl_kembali')
            ->exists();

        if ($isBeingBorrowed) {
            return redirect()->route('admin.books.index')->with('error', '❌ Buku sedang dipinjam!');
        }

        $book->delete();
        return redirect()->route('admin.books.index')->with('success', '✅ Buku berhasil dihapus!');
    }
}
