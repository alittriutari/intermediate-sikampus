<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim', 15);
            $table->string('password');
            $table->string('name', 100);
            $table->date('dob');
            $table->string('phone', 15);
            $table->text('address');
            $table->boolean('gender');
            $table->integer('class_id')->unsigned();
            //$table->foreign('class_id')->references('id')->on('class');
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
        Schema::dropIfExists('students');
    }
}
