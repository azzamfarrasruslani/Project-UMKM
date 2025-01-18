<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table = 'outlet';

    protected $primaryKey = 'id_outlet';

    protected $fillable = [
        'nama_outlet',
        'alamat_outlet',
        'jumlah_karyawan',
        'no_hp',
        'tanggal_berdiri',
        'status_outlet',
        'iframe_map',
        'link_pesan_online',
        'gambar_pesan_online',
    ];
}
