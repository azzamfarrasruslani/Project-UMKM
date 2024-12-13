<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs',function (Blueprint $table) {
            $table->id('id_blog');
            $table->string('judul_blog');
            $table->text('konten_blog');
            $table->string('gambar_blog')->nullable();
            $table->boolean('status_blog')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
