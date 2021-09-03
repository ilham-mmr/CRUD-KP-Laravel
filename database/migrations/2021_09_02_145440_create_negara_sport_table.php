<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegaraSportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negara_sport', function (Blueprint $table) {
            // $table->unsignedBigInteger('negara_id');
            // $table->foreign('negara_id')->references('id')->on('negara');
            $table->foreignId('negara_id')->constrained('negara');
            $table->foreignId('sport_id')->constrained('sports');
            $table->unsignedSmallInteger('position');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('negara_sport');
    }
}
