<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('lecture_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('lecture_id')->references('id')->on('lectures');
            $table->boolean('first_lecture')->nullable();
            $table->boolean('second_lecture')->nullable();
            $table->boolean('third_lecture')->nullable();
            $table->boolean('fourth_lecture')->nullable();
            $table->boolean('fifth_lecture')->nullable();
            $table->boolean('sixth_lecture')->nullable();
            $table->boolean('seventh_lecture')->nullable();
            $table->boolean('eighth_lecture')->nullable();
            $table->boolean('ninth_lecture')->nullable();
            $table->boolean('tenth_lecture')->nullable();
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
        Schema::dropIfExists('absences');
    }
}
