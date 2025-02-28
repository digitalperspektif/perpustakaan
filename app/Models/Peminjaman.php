<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $primaryKey = 'kode_pnjm'; // Sesuai dengan struktur tabel Anda
    public $timestamps = false;

    protected $fillable = [
        'book_id',
        'user_id',
        'tgl_pinjam',
        'tgl_kembali',
        'aksi',
        'nm_rak',
        'ket'
    ];

    public function book()
    {
        return $this->belongsTo(DataAspBk::class, 'book_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
