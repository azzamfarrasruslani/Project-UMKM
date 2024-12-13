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
        'kode_outlet',
        'nama_outlet',
        'lokasi_outlet',
        'no_hp',
        'email_outlet',
        'tanggal_berdiri',
        'status',
        'iframe_map',
    ];
}
