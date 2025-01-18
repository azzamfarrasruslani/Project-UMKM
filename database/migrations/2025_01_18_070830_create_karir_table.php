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
            $table->id('id_karir'); // Primary key dengan nama id_karir
            $table->string('nama_posisi'); // Kolom nama_posisi
            $table->string('lokasi'); // Kolom lokasi
            $table->string('tipe_kerja'); // Kolom tipe_kerja (misalnya full-time, part-time)
            $table->text('kualifikasi'); // Kolom kualifikasi (syarat pelamar)
            $table->text('deskripsi_tugas'); // Kolom deskripsi_tugas
            $table->decimal('gaji', 15, 2)->nullable(); // Kolom gaji (dapat null)
            $table->text('benefit')->nullable(); // Kolom benefit tambahan
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif'); // Kolom status dengan enum
            $table->string('gambar')->nullable(); // Kolom gambar (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
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
