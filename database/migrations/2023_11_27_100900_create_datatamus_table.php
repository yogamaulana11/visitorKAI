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
        Schema::create('datatamus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kontak')->unique();
            $table->string('instansi');
            $table->string('keperluan');
            $table->string('tujuan');
            $table->string('jadwal_temu')->nullable();
            $table->string('keterangan_tolak')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datatamus');
    }
};
