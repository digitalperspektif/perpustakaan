<?php

namespace App\Exports;

use App\Models\Peminjaman;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PeminjamanExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Peminjaman::with('book', 'user')->get()->map(function ($peminjaman) {
            return [
                'ID Peminjaman'   => $peminjaman->kode_pnjm, // Sesuai primary key
                'Judul Buku'      => $peminjaman->book->judul_buku ?? 'Tidak Ada',
                'User'            => $peminjaman->user->username ?? 'Tidak Ada',
                'Tanggal Pinjam'  => date('d-m-Y', strtotime($peminjaman->tgl_pinjam)),
                'Tanggal Kembali' => date('d-m-Y', strtotime($peminjaman->tgl_kembali)),
                'Status'          => $peminjaman->aksi,
            ];
        });
    }

    public function headings(): array
    {
        return ['ID Peminjaman', 'Judul Buku', 'User', 'Tanggal Pinjam', 'Tanggal Kembali', 'Status'];
    }
}
