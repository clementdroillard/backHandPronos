<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Image extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->integer('publication_id')->unsigned();
            $table->integer('rang');
            $table->integer('parie_id')->unsigned();
            $table->longText('url');
            $table->string('description');
            $table->boolean('validate')->default(true);
            $table->timestamps();
            $table->foreign('publication_id')->references('id')->on('publications');
            $table->foreign('parie_id')->references('id')->on('paries');
            $table->primary(array('publication_id', 'rang'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
