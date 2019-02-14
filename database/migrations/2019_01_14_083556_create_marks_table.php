<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('lecture_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('lecture_id')->references('id')->on('lectures');
            $table->unsignedTinyInteger('before_midterm')->nullable();
            $table->unsignedTinyInteger('midterm')->nullable();
            $table->unsignedTinyInteger('before_final')->nullable();
            $table->unsignedTinyInteger('final')->nullable();
            $table->unsignedTinyInteger('midterm_second_attempt')->nullable();
            $table->unsignedTinyInteger('final_second_attempt')->nullable();
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
        Schema::dropIfExists('marks');
    }
}
