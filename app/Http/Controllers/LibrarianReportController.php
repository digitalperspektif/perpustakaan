<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PeminjamanExport;

class LibrarianReportController extends Controller
{

    public function index(Request $request)
    {
        $query = Peminjaman::with('book', 'user');

        // Filter berdasarkan judul buku
        if ($request->has('judul_buku') && $request->judul_buku != '') {
            $query->whereHas('book', function ($q) use ($request) {
                $q->where('judul_buku', 'like', '%' . $request->judul_buku . '%');
            });
        }

        // Filter berdasarkan nama user
        if ($request->has('username') && $request->username != '') {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('username', 'like', '%' . $request->username . '%');
            });
        }

        // Filter berdasarkan tanggal peminjaman
        if ($request->has('tgl_pinjam') && $request->tgl_pinjam != '') {
            $query->whereDate('tgl_pinjam', $request->tgl_pinjam);
        }

        // Filter berdasarkan tanggal pengembalian
        if ($request->has('tgl_kembali') && $request->tgl_kembali != '') {
            $query->whereDate('tgl_kembali', $request->tgl_kembali);
        }

        // Filter berdasarkan status
        if ($request->has('status') && $request->status != '') {
            $query->where('aksi', $request->status);
        }

        // Pagination (10 data per halaman)
        $peminjaman = $query->paginate(10);

        return view('librarian.reports.index', compact('peminjaman'));
    }

    // Export laporan ke Excel
    public function downloadReport()
    {
        return Excel::download(new PeminjamanExport, 'laporan_peminjaman.xlsx');
    }

}
