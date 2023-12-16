<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string("nometprenom");
            $table->string("nomdelagence");
            $table->string("depart");
            $table->string("matricule");
            $table->string("destination");
            $table->integer("numeroduticket");
            $table->integer("prix");
            $table->string("numerodetelephone");
            $table->date("date");
            $table->integer("nombredesiege");
            $table->string("numerodusiege");
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
        Schema::dropIfExists('tickets');
    }
}
