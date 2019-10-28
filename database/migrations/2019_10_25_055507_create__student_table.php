<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stud_id')
            $table->string('stud_fname');
            $table->string('stud_lname');
            $table->string('stud_email');
            $table->string('stud_phone');
            $table->string('stud_courseid');
            $table->string('stud_gender');
            $table->string('stud_password');


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
        Schema::dropIfExists('_student');
    }
}
