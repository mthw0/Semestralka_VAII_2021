<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Objednavky extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objednavky', function (Blueprint $table) {
            $table->id();
            $table->string('miesto')->unique();
            $table->foreign('miesto')->on('ockovacie_miesta')->references('nazov')->onDelete('cascade');
            $table->string('meno');
            $table->string('priezvisko');
            $table->string('telCislo');
            $table->string('rodneCislo')->unique();
            $table->integer('poradoveCislo');
            $table->integer('slug')->unique();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objednavky');
    }
}
