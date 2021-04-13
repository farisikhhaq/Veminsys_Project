<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelasiTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->string('tollpaylater_nopay')->nullable();
            $table->string('payments_noPayment')->nullable();
            $table->foreign('tollpaylater_nopay')->references('nopay')->on('tollpaylater');
            $table->foreign('payments_noPayment')->references('noPayment')->on('payments');
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
            $table->dropForeign(['tollpaylater_nopay']);
            $table->dropForeign(['payments_noPayment']);
        });   
    }
}
