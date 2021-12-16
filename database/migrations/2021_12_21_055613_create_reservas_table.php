<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->integer('cantHuespedes');
            $table->date('fechaReserva');
            $table->date('fechaDesde');
            $table->date('fechaHasta');
            $table->unsignedBigInteger('IdUSer');
            $table->foreign("IdUSer")->references("id")->on("users"); 
            $table->unsignedBigInteger('IdHabitacion');
            $table->foreign("IdHabitacion")->references("id")->on("habitaciones"); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
