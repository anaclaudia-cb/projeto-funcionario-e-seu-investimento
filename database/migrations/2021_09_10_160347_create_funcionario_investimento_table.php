<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioInvestimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_investimento', function (Blueprint $table) {
                    $table->increments('id');
                    $table->unsignedBigInteger('funcionario_id')->unsigned();
                    $table->unsignedBigInteger('investimento_id')->unsigned();

                    $table->foreign('funcionario_id')->references('id')->on('funcionarios');
                    $table->foreign('investimento_id')->references('id')->on('investimentos');

                    $table->float('valor', 15,2);
                });
            }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionario_investimento');
    }
}
