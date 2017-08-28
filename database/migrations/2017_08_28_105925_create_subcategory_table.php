<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('subcategory'))
        {
            //
        }else{
            Schema::create('subcategory', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('categoryid');
                $table->string('name');
                $table->string('value');
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
        Schema::drop("subcategory");
    }
}
