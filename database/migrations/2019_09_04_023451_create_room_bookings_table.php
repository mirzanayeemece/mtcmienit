<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('guest_name');
            $table->string('guest_contact');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->unsignedInteger('room_id');
            $table->foreign('room_id')
                                ->references('id')
                                ->on('rooms')
                                ->onUpdate('cascade')
                                ->onDelete('restrict');
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
        Schema::dropIfExists('room_bookings');
    }
}
