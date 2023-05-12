<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bagagem', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo');

            $table->unsignedBigInteger('bilhete_id');
            $table->foreign('bilhete_id')->references('id')->on('bilhete')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('viagem_id');
            $table->foreign('viagem_id')->references('id')->on('viagem')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('bagagem');
    }
};
