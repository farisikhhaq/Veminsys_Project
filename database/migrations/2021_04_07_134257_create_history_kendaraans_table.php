<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryKendaraansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_kendaraans', function (Blueprint $table) {
            $table->string('noRekap')->primary();
            $table->string('jenis_kendaraan');
            $table->text('laka_kecelakaan');
            $table->string('pelanggaran');
            $table->date('tanggal_kejadian');
            $table->string('tempat_kejadian');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('history_kendaraans');
    }
}
