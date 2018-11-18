<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeCitystable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('citys', function (Blueprint $table) {
            //
            $table->integer('oblast_id')->unsigned()->default(1);
            $table->foreign('oblast_id')->references('id')->on('oblasts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('citys', function (Blueprint $table) {
            //
        });
    }
}
