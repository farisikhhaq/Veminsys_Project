<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelasiUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('admin_no_admin')->nullable();
            $table->string('cek_kendaraan_platnomer')->nullable();
            $table->string('tollpaylater_nopay')->nullable();
            $table->string('history_kendaraans_noRekap')->nullable();
            $table->foreign('admin_no_admin')->references('no_admin')->on('admin');
            $table->foreign('cek_kendaraan_platnomer')->references('platnomer')->on('cek_kendaraan');
            $table->foreign('tollpaylater_nopay')->references('nopay')->on('tollpaylater');
            $table->foreign('history_kendaraans_noRekap')->references('noRekap')->on('history_kendaraans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->dropForeign(['admin_no_admin']);
            $table->dropForeign(['cek_kendaraan_platnomer']);
            $table->dropForeign(['tollpaylater_nopay']);
            $table->dropForeign(['history_kendaraans_noRekap']);
        });  
    }
}
