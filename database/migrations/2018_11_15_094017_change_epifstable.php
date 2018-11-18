<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeEpifstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('epifs', function (Blueprint $table) {
            //
            $table->integer('candles_id')->unsigned()->default(1);
            $table->foreign('candles_id')->references('id')->on('candles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('epifs', function (Blueprint $table) {
            //
        });
    }
}
