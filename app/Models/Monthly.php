<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthly extends Model
{
    use HasFactory;

     protected $fillable = [
        'bulan',
        'tahun',
        'suhu_ruang',
        'suhu_chiller',
        'suhu_freezer',
        'status',
        'petugas_id',
        'keterangan',
    ];
}