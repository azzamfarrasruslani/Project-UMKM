<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Nama tabel dalam database
    protected $table = 'job';

    // Aktifkan timestamps jika menggunakan kolom created_at dan updated_at
    public $timestamps = true;

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_posisi',
        'lokasi_kerja',
        'tipe_kerja',
        'kualifikasi',
        'deskripsi_tugas',
        'gaji',
        'benefit',
        'status', // Dibuka/Ditutup
    ];
}
