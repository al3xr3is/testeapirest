<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintPecaPedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pecas', function (Blueprint $table) {
            Schema::table('pecas', function($table) {
                $table->foreign('anunciante_id')
                    ->references('id')
                    ->on('anunciantes')
                    ->onDelete('cascade');
              });

              Schema::table('pecas', function($table) {
                $table->foreign('pedido_id')
                    ->references('id')
                    ->on('pedidos')
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
        Schema::table('pecas', function (Blueprint $table) {
            //
        });
    }
}
