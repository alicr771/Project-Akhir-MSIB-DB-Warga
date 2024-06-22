<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('address');
            $table->string('head');
            $table->string('deputy_head');
            $table->string('treasurer');
            $table->string('secretary');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('generals');
    }
}
