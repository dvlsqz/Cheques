<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChequesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_cheque')->unique();
            $table->decimal('monto',11,2);
            $table->string('monto_letras',150);
            $table->string('lugar',150);
            $table->date('fecha');
            $table->boolean('condicion')->default(1);

            $table->integer('idchequera')->unsigned();
            $table->foreign('idchequera')->references('id')->on('chequeras');

            $table->integer('idproveedor')->unsigned();
            $table->foreign('idproveedor')->references('id')->on('proveedores');
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
        Schema::dropIfExists('cheques');
    }
}
