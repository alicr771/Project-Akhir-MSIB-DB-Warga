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
        Schema::create('family_card_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('family_card_id')->nullable();
            $table->foreignId('resident_id')->nullable();
            $table->enum('status', ['Family Head', 'Family Member']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_card_details');
    }
};
