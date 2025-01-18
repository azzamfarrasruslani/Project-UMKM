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
        Schema::create('outlet', function (Blueprint $table) {
            $table->id('id_outlet');
            $table->string('nama_outlet')->index();
            $table->string('alamat_outlet');
            $table->integer('jumlah_karyawan');
            $table->string('no_hp')->unique();
            $table->date('tanggal_berdiri');
            $table->enum('status_outlet', ['aktif', 'non-aktif'])->default('aktif');
            $table->text('iframe_map')->nullable();
            $table->text('link_pesan_online')->nullable();
            $table->string('gambar_pesan_online')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outlet');
    }
};
