<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tentang_kami', function (Blueprint $table) {
            $table->id('id_tK');
            $table->string('judul_tK');
            $table->text('deskripsi_tK');
            $table->string('gambar_tK')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tentang_kami');
    }
};
