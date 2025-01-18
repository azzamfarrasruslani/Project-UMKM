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
        'sejarah_singkat',
        'visi',
        'misi',
        'gambar_tK1',
        'gambar_tK2',
        'gambar_tK3',
    ];
}
