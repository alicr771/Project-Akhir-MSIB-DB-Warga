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
            $table->enum('gender', ['male', 'female']);
            $table->enum('religion', ['islam', 'kristen', 'hindu', 'buddha']);
            $table->enum('last_education', ['Tidak', 'SD', 'SMP/MTS', 'SMA/K', 'S1', 'S2']);
            $table->enum('citizenship', ['warga negara', 'bukan warga negara']);
            $table->enum('marital_status', ['lajang', 'menikah', 'cerai', 'duda/janda']);
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
