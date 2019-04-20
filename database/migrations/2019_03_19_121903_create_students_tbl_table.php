<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_tbl', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('student_name');
            $table->integer('student_roll');
            $table->string('student_FatherName');
            $table->string('student_motherName');
            $table->string('student_email');
            $table->integer('student_phone');
            $table->string('student_address');
            $table->string('student_images');
            $table->string('student_password');
            $table->string('student_department');
            $table->integer('student_admissionYear');
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
        Schema::dropIfExists('students_tbl');
    }
}
