<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsBossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments_bosses', function (Blueprint $table) {
            $table->id();
            $table->string('details', 500)->nullable();

            $table->unsignedBigInteger('fk_employees_id');
            $table->foreign('fk_employees_id')->references('id')->on('employees')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_departments_id');
            $table->foreign('fk_departments_id')->references('id')->on('departments')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('departments_bosses');
    }
}
