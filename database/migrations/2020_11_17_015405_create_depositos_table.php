<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositosTable extends Migration
{

    public function up()
    {
        Schema::create('depositos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('conta_corrente_id')->unsigned();
            $table->foreign('conta_corrente_id')->references('id')
                ->on('conta_correntes');            
            $table->decimal('valor_deposito',10,2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('depositos');
    }
}
