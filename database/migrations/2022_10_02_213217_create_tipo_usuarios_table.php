<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use ilumininate\DataBase\softDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CreateTipoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            
            $table->integer('id_usuarios')->unsigned();
            $table->foreign('id_usuarios')->references('id')->on('tipo_usuarios')->onDelete('cascade');
            $table->integer('id_clientes')->nullable()->unsigned();
            $table->foreign('id_clientes')->references('id')->on('tipo_usuarios')->onDelete('cascade');
            $table->timestamps();
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
        Schema::dropIfExists('tipo_usuarios');
    }
}
