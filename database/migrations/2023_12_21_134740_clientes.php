<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('nascimento');
            $table->char('sexo', 1);
            $table->string('celular');
            $table->string('cel_recado');
            $table->string('telefone');
            $table->string('nome_recado');
            $table->string('cpf');
            $table->string('rg');
            $table->string('cep');
            $table->string('municipio');
            $table->string('logradouro');
            $table->string('numero_end');
            $table->string('complemento_end');
            $table->string('bairro');
            $table->string('referencia_end');
            $table->string('nome_nutricionista');
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
