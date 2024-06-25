<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
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
            $table->enum('gender', ['male', 'female']);
            $table->enum('religion', ['islam', 'kristen', 'hindu', 'buddha']);
            $table->enum('last_education', ['sd', 'smp', 'sma', 'diploma', 'sarjana']);
            $table->enum('citizenship', ['wna', 'wni']);
            $table->enum('marital_status', ['married', 'single']);
            $table->foreignId('kelurahan_id')->constrained('kelurahans');
            $table->foreignId('neighborhood_id')->constrained('neighborhoods');
            $table->foreignId('community_unit_id')->constrained('community_units');
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
}
