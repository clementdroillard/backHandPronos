<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Commentaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('publication_id')->unsigned();
            $table->integer('utilisateur_id')->unsigned();
            $table->longText('commentaire');
            $table->boolean('estPositif')->nullable()->default(null);
            $table->boolean('validate')->default(true);
            $table->timestamps();
            $table->foreign('publication_id')->references('id')->on('publications');
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
