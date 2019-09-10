<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')
                                ->references('id')
                                ->on('departments')
                                ->onUpdate('cascade')
                                ->onDelete('restrict');
            $table->string('name',100);
            $table->date('date_of_birth');
            $table->string('phone',15);
            $table->string('address');
            $table->string('blood_group',10)->nullable();
            $table->integer('designation_id')->unsigned();
            $table->foreign('designation_id')
                                ->references('id')
                                ->on('employee_designations')
                                ->onUpdate('cascade')
                                ->onDelete('restrict');
            $table->integer('salary_grade_id')->unsigned();
            $table->foreign('salary_grade_id')
                                ->references('id')
                                ->on('salary_grade')
                                ->onUpdate('cascade')
                                ->onDelete('restrict');
            $table->string('emergency_contact',15);
            $table->string('other')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
