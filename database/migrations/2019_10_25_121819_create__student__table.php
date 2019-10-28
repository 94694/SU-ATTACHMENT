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
        Schema::create('_student_', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stud_id');
            $table->string('stud_fname');
            $table->string('stud_lname');
            $table->string('stud_phonenumber');
            $table->string('stud_email')->unique();
            $table->string('password')
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
        Schema::dropIfExists('_student_');
    }
}
