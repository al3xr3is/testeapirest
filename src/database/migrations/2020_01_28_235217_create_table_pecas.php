<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePecas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pecas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('descricao');
            $table->float('preco');
            $table->timestamps();
            $table->bigInteger('anunciante_id')->unsigned();
            $table->bigInteger('pedido_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pecas');
    }
}
