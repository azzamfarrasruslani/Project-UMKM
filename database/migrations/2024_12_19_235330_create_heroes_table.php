<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('hero', function (Blueprint $table) {
            $table->id('id_hero');
            $table->string('nama_hero')->index();
            $table->string('gambar_hero')->nullable();
            $table->enum('status_hero', ['aktif', 'non-aktif'])->default('aktif');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('hero');
    }
};
