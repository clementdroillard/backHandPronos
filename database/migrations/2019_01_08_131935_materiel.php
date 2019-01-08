<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materiel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiels', function (Blueprint $table) {
            $table->integer('materiel');
            $table->integer('utilisateur_id')->unsigned();
            $table->boolean('validate')->default(true);
            $table->timestamps();
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs');
            $table->primary('materiel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiels');
    }
}
