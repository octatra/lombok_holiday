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
        Schema::create('paket_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->unsignedBigInteger('kategori_id'); // Foreign key
            $table->decimal('harga', 10, 2)->nullable(); // Decimal untuk harga
            $table->longText('deskripsi')->nullable();
            $table->longText('fasilitas')->nullable();
            $table->string('gambar')->nullable(); // Tambahan kolom gambar
            $table->string('slug_url');
            $table->timestamps();

            // Relasi foreign key
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_wisata');
    }
};
