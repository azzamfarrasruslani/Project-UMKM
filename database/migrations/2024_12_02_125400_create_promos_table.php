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
            $table->string('judul'); // Judul promo
            $table->text('deskripsi'); // Deskripsi promo
            $table->decimal('diskon', 5, 2)->nullable(); // Diskon dalam persen
            $table->date('tanggal_mulai'); // Tanggal mulai promo
            $table->date('tanggal_akhir'); // Tanggal akhir promo
            $table->string('gambar')->nullable(); // Gambar promo
            $table->enum('status', ['aktif', 'tidak aktif'])->default('aktif')->nullable();
            $table->timestamps(); // Kolom created_at dan updated_at
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
