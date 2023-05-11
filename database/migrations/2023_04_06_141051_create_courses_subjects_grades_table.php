<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesSubjectsGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_subjects_grades', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fk_courses_id');
            $table->foreign('fk_courses_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_subjects_id');
            $table->foreign('fk_subjects_id')->references('id')->on('subjects')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_grades_id');
            $table->foreign('fk_grades_id')->references('id')->on('grades')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_subjects_grades');
    }
}
