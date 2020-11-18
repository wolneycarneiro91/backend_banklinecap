<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContaCorrentesTable extends Migration
{
    public function up()
    {
        Schema::create('conta_correntes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')
                ->on('clientes');
            $table->string('AG')->comment('número da agência');
            $table->string('CC')->comment('número da conta corrente');            
            $table->decimal('saldo',10,2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('conta_correntes');
    }
}
