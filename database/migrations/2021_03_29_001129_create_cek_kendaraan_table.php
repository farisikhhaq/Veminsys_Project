<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCekKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cek_kendaraan', function (Blueprint $table) {
            $table->id('id_kendaraan');
            $table->string('platnomer',9)->unique();
            $table->string('namakendaraan',10 );
            $table->string('no_mesin',17);
            $table->string('selinder')->unique();
            $table->date('merk');
            $table->string('type');
            $table->string('warna');
            $table->string('bahan_bakar');
            $table->string('kilometer');
            $table->string('tahun');
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
        Schema::dropIfExists('cek_kendaraan');
    }
}
