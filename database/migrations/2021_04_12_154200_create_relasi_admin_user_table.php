<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelasiAdminUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin', function (Blueprint $table) {
            $table->unsignedBigInteger('users_id_user')->nullable();
            $table->foreign('users_id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *z
     * @return void
     */
    public function down()
    {
        Schema::table('admin', function (Blueprint $table) {
            $table->dropForeign(['users_id_user']);
        });
    }
}
