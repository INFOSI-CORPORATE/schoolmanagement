<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nBi');
            $table->string('address');
            $table->string('country');
            $table->string('contact');
            $table->string('contactAlter');
            $table->string('email');
            $table->date('admission');
            $table->string('office');
            $table->enum('sex', ['Male', 'Female', 'Other']);
            $table->date('dateBirth')->nullable();

            $table->unsignedBigInteger('fk_departments_id');
            $table->foreign('fk_departments_id')->references('id')->on('departments')->onDelete('CASCADE')->onUpgrade('CASCADE');

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
        Schema::dropIfExists('employees');
    }
}
