<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{

    protected $table = 'karir';


    protected $primaryKey = 'id_karir';

    protected $fillable = [
        'nama_posisi',
        'lokasi',
        'tipe_kerja',
        'kualifikasi',
        'deskripsi_tugas',
        'gaji',
        'benefit',
        'status',
    ];
}
