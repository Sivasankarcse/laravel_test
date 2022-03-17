<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_details', function (Blueprint $table) {
            $table->increments('employee_id');
            $table->string('employee_name');
            $table->string('employee_email')->unique();
            $table->integer('employee_department');
            $table->integer('employee_position');
            $table->integer('employee_qualification');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_details');
    }
}
