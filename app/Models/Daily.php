<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Daily extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'tanggal',
        'suhu_pagi',
        'suhu_sore',
        'petugas_id',
        'status',
        'keterangan',
    ];
}