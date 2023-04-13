<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_teachers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fk_courses_id');
            $table->foreign('fk_courses_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_teachers_id');
            $table->foreign('fk_teachers_id')->references('id')->on('teachers')->onDelete('CASCADE')->onUpgrade('CASCADE');

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
        Schema::dropIfExists('courses_teachers');
    }
}
