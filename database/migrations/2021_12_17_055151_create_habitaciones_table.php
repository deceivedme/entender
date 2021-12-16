<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('name',40);
            $table->string('apellido',40);
            $table->string('email',40)->unique();            
            $table->string('password',40);
            $table->unsignedBigInteger('IdTipoHabitaciones');
            $table->foreign("IdTipoHabitaciones")->references("id")->on("TipoHabitaciones");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}
