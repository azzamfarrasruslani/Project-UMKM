<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesanSaran extends Model
{
    protected $table = 'pesansaran';

    protected $fillable = [
        'nama',
        'email',
        'subjek',
        'pesan',
    ];
}
