<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    // Nama tabel dalam database
    protected $table = 'karir';

    // Aktifkan timestamps jika menggunakan kolom created_at dan updated_at
    protected $primaryKey = 'id_karir';
    public $timestamps = false;

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_posisi',
        'lokasi',
        'tipe_kerja',
        'kualifikasi',
        'deskripsi_tugas',
        'gaji',
        'benefit',
        'status',
        'gambar',
    ];
}
