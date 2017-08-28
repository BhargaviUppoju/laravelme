<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('city'))
        {
            //
        }else{
            Schema::create('city', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('countryid');
                $table->string('name');
                $table->integer('status');
                $table->tinyInteger('deleted');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}
