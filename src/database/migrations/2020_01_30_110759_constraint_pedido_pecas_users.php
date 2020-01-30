<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintPedidoPecasUsers extends Migration
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
                $table->foreign('users_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
              });

              Schema::table('pedidos', function($table) {
                $table->foreign('pecas_id')
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
