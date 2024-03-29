<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuereservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venuereservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('contact_no', 30);
            $table->date('start_date');
            $table->date('end_date')->nullable($value = true);
            $table->unsignedInteger('venue_id');
            $table->foreign('venue_id')
                  ->references('id')->on('venues')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
            $table->integer('no_of_attendee');
            $table->string('price', 20)->nullable($value = true);
            $table->smallInteger('status');
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
        Schema::dropIfExists('venuereservations');
    }
}
