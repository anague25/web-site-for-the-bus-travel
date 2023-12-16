<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('jour');
            $table->string('nomdelagence');
            $table->string('lieudedepart');
            $table->string('destination');
            $table->integer('totaldeplacedubus');
            $table->integer('prixdusiege');
            $table->string('positiondelagence');
            $table->string('matricule');

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
        Schema::dropIfExists('buses');
    }
}
