<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryReceiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_receivers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')
                                    ->unsigned();
            $table->foreign('employee_id')
                                    ->references('id')
                                    ->on('employees')
                                    ->onUpdate('cascade')
                                    ->onDelete('restrict');
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
        Schema::dropIfExists('inventory_receivers');
    }
}
