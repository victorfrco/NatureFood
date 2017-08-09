<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rua');
            $table->string('tipo');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cep');
            $table->string('complemento');
            $table->string('referencia');

            /*todo
            **
             *criar chaves estrangeiras
             * 'cliente'
             */

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
        Schema::dropIfExists('adresses');
    }
}
