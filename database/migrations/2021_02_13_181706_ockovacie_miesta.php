<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OckovacieMiesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ockovacie_miestos', function (Blueprint $table) {
            $table->id();
            $table->string('nazov')->unique();
            $table->string('adresa');
            $table->string('popis');
            $table->string('obrazok');
            $table->integer('dennaKapacita');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ockovacie_miesta');
    }
}
