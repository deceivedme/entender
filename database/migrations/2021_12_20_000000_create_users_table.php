<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();   
            $table->integer('precio');         
            $table->integer('cantCamas');
            $table->integer('NumHabitaciones');
            $table->unsignedBigInteger('IdTipoUSer');
            $table->foreign("IdTipoUSer")->references("id")->on("tipousers");            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
