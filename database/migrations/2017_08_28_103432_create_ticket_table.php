<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('ticket'))
        {
            //
        }else{
            Schema::create('ticket', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('eventid');
                $table->string('name');
                $table->string('description');
                $table->dateTime('startdatetime');
                $table->dateTime('enddatetime');
                $table->double('price');
                $table->mediumInteger('quantity');
                $table->tinyInteger('deleted');
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
        Schema::drop("ticket");
    }
}
