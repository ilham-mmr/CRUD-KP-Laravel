<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKotaTable extends Migration
//2019_08_11_010811_create_kota_table
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('negara_id');
            $table->string('nama');
            $table->string('nama_inggris')->nullable();
            $table->decimal('lat', 10,7)->nullable();
            $table->decimal('lon', 10,7)->nullable();
            $table->timestamps();

            $table->foreign('negara_id')->references('id')->on('negara');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kota');
    }
}
