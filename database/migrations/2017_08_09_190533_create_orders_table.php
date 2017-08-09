<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_entrega');
            $table->date('data_agendada');
            $table->float('valor');
            $table->float('valor_desconto');
            $table->float('valor_total');
            $table->boolean('status');

            /*TODO
            *
             * CRIAR CHAVES ESTRANGEIRAS
             * FREQUENCIA
             * CLIENTE
             * */


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
        Schema::dropIfExists('orders');
    }
}
