<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintAnunciantePeca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anunciantes', function (Blueprint $table) {
            Schema::table('anunciantes', function($table) {
                $table->foreign('peca_id')
                    ->references('id')
                    ->on('pecas')
                    ->onDelete('cascade');
              });

              Schema::table('anunciantes', function($table) {
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
        Schema::table('anunciantes', function (Blueprint $table) {
            //
        });
    }
}
