<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';
    protected $primaryKey = 'id_blog';

    protected $fillable = [
        'judul_blog',
        'konten_blog',
        'gambar_blog',
        'status_blog'
    ];

}
