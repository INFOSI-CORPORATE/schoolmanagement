<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesClassesGradesStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_classes_grades_students', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fk_courses_id');
            $table->foreign('fk_courses_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_classes_id');
            $table->foreign('fk_classes_id')->references('id')->on('classes')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_grades_id');
            $table->foreign('fk_grades_id')->references('id')->on('grades')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_students_id');
            $table->foreign('fk_students_id')->references('id')->on('students')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->softDeletes();
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
        Schema::dropIfExists('courses_classes_grades_students');
    }
}
