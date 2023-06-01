<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuitions', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->bigInteger('price');

            $table->unsignedBigInteger('fk_students_id');
            $table->foreign('fk_students_id')->references('id')->on('students')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_grades_id');
            $table->foreign('fk_grades_id')->references('id')->on('grades')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_schoolyears_id');
            $table->foreign('fk_schoolyears_id')->references('id')->on('schoolyears')->onDelete('CASCADE')->onUpgrade('CASCADE');

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
        Schema::dropIfExists('tuitions');
    }
}
