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
        Schema::create('relatorio', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');

            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('cliente')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('encomenda_id');
            $table->foreign('encomenda_id')->references('id')->on('encomenda')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('vendas_id');
            $table->foreign('vendas_id')->references('id')->on('venda')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('bagagem_id');
            $table->foreign('bagagem_id')->references('id')->on('bagagem')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('relatorio');
    }
};
