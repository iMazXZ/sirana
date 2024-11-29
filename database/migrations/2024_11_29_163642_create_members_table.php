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
        Schema::create('members', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Nama anggota
            $table->string('username')->unique(); // Username anggota
            $table->string('phone')->nullable(); // Nomor telepon anggota
            $table->date('date_of_birth')->nullable(); // Tanggal lahir anggota
            $table->timestamp('join_date')->nullable(); // Tanggal bergabung
            $table->enum('status', ['active', 'inactive', 'resigned'])->default('active'); // Status anggota
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
