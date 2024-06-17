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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->string('pob');
            $table->date('dob');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->enum('last_education', ['sd', 'smp', 'sma', 'diploma', 'sarjana'])->default('sd');
            $table->enum('citizenship', ['wna', 'wni'])->default('wna');
            $table->enum('marital_status', ['married', 'single'])->default('single');
            $table->foreignId('sub_district_id');
            $table->foreignId('neighborhood_id');
            $table->foreignId('community_unit_id');
            $table->foreignId('family_card_detail_id')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
