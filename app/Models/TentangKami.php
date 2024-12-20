<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    use HasFactory;
    protected $table = 'tentang_kami';
    protected $primaryKey = 'id_tK';

    protected $fillable = [
        'judul_tK',
        'deskripsi_tK',
        'gambar_tK',
    ];
}
