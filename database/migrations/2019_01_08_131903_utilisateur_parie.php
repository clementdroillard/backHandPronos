<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UtilisateurParie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur_paries', function (Blueprint $table) {
            $table->integer('utilisateur_id')->unsigned();
            $table->integer('parie_id')->unsigned();
            $table->boolean('validate')->default(true);
            $table->timestamps();
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs');
            $table->foreign('parie_id')->references('id')->on('paries');
            $table->primary(array('utilisateur_id', 'parie_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateur_paries');
    }
}
