<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $table = 'menu';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar',
    ];
}
