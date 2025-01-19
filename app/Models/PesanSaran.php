<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanSaran extends Model
{
    use HasFactory;

    protected $table = 'pesan_saran';
    protected $primaryKey = 'id_pesan_saran';

    protected $fillable = [
        'nama',
        'email',
        'subjek',
        'pesan',
    ];
}
