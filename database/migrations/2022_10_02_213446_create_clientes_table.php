<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use ilumininate\DataBase\softDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('e-mail');
            $table->string('password');
            $table->timestamps();
            
            $table->integer('id_pedidos')->unsigned();
            $table->foreign('id_pedidos')->references('id')->on('clientes')->onDelete('cascade');
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
