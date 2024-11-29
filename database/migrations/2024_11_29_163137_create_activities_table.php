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
        Schema::create('activities', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title'); // Judul kegiatan
            $table->text('description'); // Deskripsi kegiatan
            $table->timestamp('start_date'); // Tanggal mulai kegiatan
            $table->timestamp('end_date')->nullable(); // Tanggal selesai kegiatan
            $table->string('location'); // Lokasi kegiatan
            $table->enum('status', ['planned', 'ongoing', 'completed'])->default('planned'); // Status kegiatan
            $table->string('slug')->unique(); // Slug kegiatan
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
