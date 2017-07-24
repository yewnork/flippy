<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinFlipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_flips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('result');
          
            $table->integer('coin_flips_series_id')->unsigned()->nullable();
            $table->foreign('coin_flips_series_id')->references('id')->on('coin_flips_series');
          
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
        Schema::dropIfExists('coin_flips');
    }
}
