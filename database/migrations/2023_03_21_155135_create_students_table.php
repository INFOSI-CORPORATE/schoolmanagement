<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->integer('nProcess');
            $table->string('nBi')->unique();
            $table->string('father');
            $table->string('mother');
            $table->string('contact');
            $table->string('contactAlter');
            $table->string('email');
            $table->date('dateBirth');
            $table->string('schoolyear');
            $table->timestamps();
            $table->softDeletes();
            
        });
    }


    public function down()
    {
        Schema::dropIfExists('students');
    }
}
