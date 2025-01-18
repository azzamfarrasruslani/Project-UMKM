<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $primaryKey = 'id_menu';

    protected $fillable = [
        'nama_menu',
        'deskripsi_menu',
        'kategori_menu',
        'harga_menu',
        'gambar_menu',
        'status_menu'
    ];
}

