<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelasiCekHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('history_kendaraans', function (Blueprint $table) {
            $table->string('cek_kendaraan_platnomer')->nullable();
            $table->foreign('cek_kendaraan_platnomer')->references('platnomer')->on('cek_kendaraan');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function(Blueprint $table){
            $table->dropForeign(['cek_kendaraan_platnomer']);
        });
    }
}