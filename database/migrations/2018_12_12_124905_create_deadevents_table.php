<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeadeventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deadevents', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('type_flag');
	    $table->string('name');
	    $table->integer('user_id');
	    $table->integer('pages_id');
	    $table->string('date');
	    $table->text('text');
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
        Schema::dropIfExists('deadevents');
    }
}
