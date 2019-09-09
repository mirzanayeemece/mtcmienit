<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_items', function (Blueprint $table) {
            $table->increments('id');
            $table->String('name',100);
            $table->integer('price');
            $table->integer('meal_type_id')
                                    ->unsigned();
            $table->foreign('meal_type_id')
                                    ->references('id')
                                    ->on('meal_types')
                                    ->onUpdate('cascade')
                                    ->onDelete('restrict');
            $table->String('description',255)->nullable();
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
        Schema::dropIfExists('meal_items');
    }
}
