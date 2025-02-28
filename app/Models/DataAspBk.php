<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAspBk extends Model
{
    use HasFactory;

    protected $table = 'data_asp_bk';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id_buku',
        'no_buku',
        'judul_buku',
        'jenis_buku',
        'rak_buku',
        'penerbit',
        'tahun_terbit',
        'cover_buku',
        'file'
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'book_id', 'id');
    }
}
