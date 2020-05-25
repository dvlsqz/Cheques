<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('no_cuenta')->unique();
            $table->string('tipo',50);
            $table->decimal('saldo', 11, 2);
            $table->boolean('condicion')->default(1);

            $table->integer('idbanco')->unsigned();
            $table->foreign('idbanco')->references('id')->on('bancos');
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
        Schema::dropIfExists('cuentas');
    }
}
