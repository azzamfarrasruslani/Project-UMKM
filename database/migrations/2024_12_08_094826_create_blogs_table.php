<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog',function (Blueprint $table) {
            $table->id('id_blog');
            $table->string('judul_blog');
            $table->text('konten_blog');
            $table->string('gambar_blog')->nullable();
            $table->enum('status_blog', ['aktif', 'non-aktif'])->default('aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
