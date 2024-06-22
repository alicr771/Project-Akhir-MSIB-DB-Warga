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
        Schema::create('detail_keluargas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('manajemenKeluarga_id');
            $table->unsignedBigInteger('penduduk_id');
            $table->string('status');
            $table->timestamps();

            $table->foreign('manajemenKeluarga_id')->references('id')->on('manajemen_Keluargas')->onDelete('cascade');
            $table->foreign('penduduk_id')->references('id')->on('penduduks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_keluargas');
    }
};
