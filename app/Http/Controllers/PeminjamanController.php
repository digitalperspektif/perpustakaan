<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\DataAspBk;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Menampilkan riwayat peminjaman anggota.
     */
    public function index(Request $request)
    {
        $query = Peminjaman::where('user_id', Auth::id());

        // Filter berdasarkan judul buku
        if ($request->has('search') && $request->search != '') {
            $query->whereHas('book', function ($q) use ($request) {
                $q->where('judul_buku', 'like', '%' . $request->search . '%');
            });
        }

        // Filter berdasarkan tanggal pinjam
        if ($request->has('start_date') && $request->start_date != '') {
            $query->whereDate('tgl_pinjam', '>=', $request->start_date);
        }
        if ($request->has('end_date') && $request->end_date != '') {
            $query->whereDate('tgl_pinjam', '<=', $request->end_date);
        }

        // Data buku yang sedang dipinjam (belum dikembalikan)
        $peminjaman = (clone $query)
            ->whereNull('tgl_kembali')
            ->paginate(10, ['*'], 'peminjaman_page');

        // Data buku yang sudah dikembalikan
        $pengembalian = (clone $query)
            ->whereNotNull('tgl_kembali')
            ->paginate(10, ['*'], 'pengembalian_page');

        // Hitung total riwayat peminjaman & pengembalian
        $totalRiwayat = $peminjaman->total() + $pengembalian->total();

        return view('peminjaman.index', compact('peminjaman', 'pengembalian', 'totalRiwayat'));
    }



    /**
     * Proses peminjaman buku oleh anggota.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:data_asp_bk,id',
            'user_id' => 'required|exists:tab_login,id_user',
        ]);

        $buku = DataAspBk::findOrFail($request->book_id);
        $user = Auth::user();

        // Cek apakah buku sudah dipinjam dan belum dikembalikan
        $cekPeminjaman = Peminjaman::where('book_id', $request->book_id)
            ->whereNull('tgl_kembali')
            ->first();

        if ($cekPeminjaman) {
            return back()->with('error', 'Buku ini sedang dipinjam oleh pengguna lain!');
        }

        // Simpan peminjaman buku dengan mengambil nm_rak dari buku
        Peminjaman::create([
            'book_id'   => $request->book_id,
            'user_id'   => $request->user_id,
            'tgl_pinjam' => now(),
            'aksi'      => 'Dipinjam',
            'nm_rak'    => $buku->rak_buku,
            'ket'       => "$user->username sedang meminjam buku $buku->judul_buku"
        ]);

        return redirect()->route('peminjaman.index')->with('success', 'Buku berhasil dipinjam!');
    }

    /**
     * Proses pengembalian buku.
     */
    public function returnBook($id)
    {
        // Gunakan kode_pnjm sebagai ID peminjaman
        $peminjaman = Peminjaman::where('kode_pnjm', $id)
            ->where('user_id', Auth::id())
            ->whereNull('tgl_kembali')
            ->firstOrFail();

        $peminjaman->update([
            'tgl_kembali' => now(),
            'aksi'        => 'Dikembalikan',
            'ket'         => Auth::user()->username . ' telah mengembalikan buku ' . $peminjaman->book->judul_buku,
        ]);

        return redirect()->route('peminjaman.index')->with('success', 'Buku berhasil dikembalikan!');
    }
}
