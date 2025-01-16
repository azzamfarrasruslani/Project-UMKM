<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'testimonis';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'occupation',
        'message',
        'rating',
    ];
}
