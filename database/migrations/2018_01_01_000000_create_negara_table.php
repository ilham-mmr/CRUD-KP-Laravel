<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNegaraTable extends Migration
//2019_08_11_010737_create_negara_table
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negara', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('kode');
            $table->string('kode_iso3')->nullable();
            $table->string('nama');
            $table->string('nama_inggris')->nullable();
            $table->decimal('lat', 10,7)->nullable();
            $table->decimal('lon', 10,7)->nullable();
            $table->string('kode_telepon');
            $table->string('mata_uang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
        Schema::dropIfExists('kamar');
        Schema::dropIfExists('kota');
        
        Schema::dropIfExists('negara');
    }
}
