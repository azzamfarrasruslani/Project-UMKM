<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promo';
    protected $primaryKey = 'id_promo';

    protected $fillable = [
        'judul',         // Sesuai dengan kolom di tabel
        'deskripsi_promo',
        'diskon_promo',
        'tanggal_mulai',
        'tanggal_akhir',
        'gambar_promo',
        'status_promo',
    ];

    
}
