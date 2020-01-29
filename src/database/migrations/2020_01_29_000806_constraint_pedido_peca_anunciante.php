<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintPedidoPecaAnunciante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            Schema::table('pedidos', function($table) {
                $table->foreign('anunciante_id')
                    ->references('id')
                    ->on('anunciantes')
                    ->onDelete('cascade');
              });

              Schema::table('pedidos', function($table) {
                $table->foreign('peca_id')
                    ->references('id')
                    ->on('pecas')
                    ->onDelete('cascade');
              });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            //
        });
    }
}
