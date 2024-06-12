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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->string('pob');
            $table->string('dob');
            $table->enum('gender');
            $table->enum('religion');
            $table->enum('last_education');
            $table->enum('citizenship');
            $table->enum('marital_status');
            $table->foreignId('manajemenRT_id')->constrained('manajemen_r_t_s')->onDelete('cascade');
            $table->foreignId('manajemenRW_id')->constrained('manajemen_r_w_s')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduks');
    }
};
