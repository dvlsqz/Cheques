<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChequerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chequeras', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('chequera')->unique();
            $table->string('observaciones',50);
            $table->decimal('ch_inicio', 11, 2);
            $table->decimal('ch_fin', 11, 2);
            $table->boolean('condicion')->default(1);

            $table->integer('idcuenta')->unsigned();
            $table->foreign('idcuenta')->references('id')->on('cuentas');
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
        Schema::dropIfExists('chequeras');
    }
}
