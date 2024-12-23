<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPengunjung extends Model
{
    use HasFactory;

    protected $table = 'pengunjung';
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
        'tanggal_berkunjung'
    ];
}
