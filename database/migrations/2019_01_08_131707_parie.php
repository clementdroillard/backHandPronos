<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Parie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paries', function (Blueprint $table) {
            $table->increments('id');
            $table->float('cote',8,2);
            $table->float('ArgentMiser',8,2);
            $table->boolean('resultat')->nullable()->default(null);
            $table->boolean('validate')->default(true);
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
        Schema::dropIfExists('paries');
    }
}
