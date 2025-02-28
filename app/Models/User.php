<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'tab_login';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'role',
        'unit'
    ];

    protected $hidden = [
        'password',
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'user_id', 'id_user');
    }
}
