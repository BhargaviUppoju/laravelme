<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('event'))
        {
            //
        }else{
            Schema::create('event', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('description');
                $table->string('venue');
                $table->dateTime('startdatetime');
                $table->dateTime('enddatetime');
                $table->mediumInteger('countryid');
                $table->mediumInteger('stateid');
                $table->mediumInteger('cityid');
                $table->mediumInteger('categoryid');
                $table->mediumInteger('subcategoryid');
                $table->tinyInteger('deleted');
                $table->string('banner');
                $table->string('url');
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
        Schema::drop("event");
    }
}
