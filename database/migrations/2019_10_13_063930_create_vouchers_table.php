<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->String('code')->unique();
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')
                            ->references('id')
                            ->on('voucher_types')
                            ->onUpdate('cascade')
                            ->onDelete('restrict');
            $table->Biginteger('amount');
            $table->String('date');
            $table->String('details');
            $table->String('issued_by');
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
        Schema::dropIfExists('vouchers');
    }
}
