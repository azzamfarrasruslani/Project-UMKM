<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimoni';
    protected $primaryKey = 'id_testimoni';

    protected $fillable = [
        'nama',
        'asal_testimoni',
        'pesan',
        'rating',
    ];

}


