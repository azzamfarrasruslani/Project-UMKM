<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('promo', function (Blueprint $table) {
            $table->id('id_promo');
            $table->string('judul');
            $table->text('deskripsi_promo');
            $table->text('syarat_ketentuan')->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->string('gambar_promo')->nullable();
            $table->enum('status_promo', ['aktif','non-aktif'])->default('aktif')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo');
    }
};
