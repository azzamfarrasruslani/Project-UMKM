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
            $table->string('title'); // Judul promo
            $table->text('description'); // Deskripsi promo
            $table->decimal('discount', 5, 2)->nullable(); // Diskon dalam persen
            $table->date('start_date'); // Tanggal mulai promo
            $table->date('end_date'); // Tanggal akhir promo
            $table->string('image')->nullable(); // Gambar promo
            $table->boolean('is_active')->default(true); // Status promo aktif atau tidak
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
