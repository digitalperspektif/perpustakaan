<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    use HasFactory;

    protected $table = 'upload_file';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'kode_barang',
        'judul',
        'nama_file',
        'book_id'
    ];

    public function book()
    {
        return $this->belongsTo(DataAspBk::class, 'book_id', 'id');
    }
}
