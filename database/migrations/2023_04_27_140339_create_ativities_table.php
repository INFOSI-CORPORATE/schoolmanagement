<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ativities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('details', 500);
            $table->string('location');
            $table->string('duration');
            $table->bigInteger('price');
            $table->string('status'); // Cancelada, Em andamento
            $table->dateTime('start');
            $table->dateTime('end');
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
        Schema::dropIfExists('ativities');
    }
}
