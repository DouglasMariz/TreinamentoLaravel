<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rua')->nullable(true);
            $table->string('numero')->nullable(true);
            $table->integer('cep')->nullable(true);
            $table->string('complemento')->nullable(true);
            $table->string('bairro')->nullable(true);
            $table->integer('cidades_id')->nullable(true)->unsigned();
            $table->foreign('cidades_id')->references('id')->on('cidades');
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
        Schema::dropIfExists('enderecos');
    }
}
