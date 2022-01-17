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
        Schema::create('objednavkas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('miesto')
                ->references('id')
                ->on('ockovacie_miestos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('meno');
            $table->string('priezvisko');
            $table->string('telCislo');
            $table->string('rodneCislo')->unique();
            $table->integer('poradoveCislo');
            $table->integer('den');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objednavkas');
    }
}
