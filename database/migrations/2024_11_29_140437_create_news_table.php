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
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Judul berita
            $table->text('content'); // Isi berita
            $table->string('image'); // Gambar utama (opsional)
            $table->foreignId('category_id')->constrained('news_categories');
            $table->timestamp('published_at')->nullable(); // Tanggal publikasi
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Status berita
            $table->string('slug')->unique(); // URL-friendly slug
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
