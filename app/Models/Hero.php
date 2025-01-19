<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $table = 'hero';
    protected $primaryKey = 'id_hero';

    protected $fillable = [
        'nama_hero',
        'gambar_hero',
        'status_hero',
    ];
}
