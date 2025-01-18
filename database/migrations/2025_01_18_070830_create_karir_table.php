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
        Schema::create('karir', function (Blueprint $table) {
            $table->id('id_karir');
            $table->string('nama_posisi');
            $table->string('lokasi');
            $table->string('tipe_kerja');
            $table->text('kualifikasi');
            $table->text('deskripsi_tugas');
            $table->decimal('gaji', 15, 2)->nullable();
            $table->text('benefit')->nullable();
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karir');
    }
};
