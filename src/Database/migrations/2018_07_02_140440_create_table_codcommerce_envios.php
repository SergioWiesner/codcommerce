<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCodcommerceEnvios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codcommerce_envios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codcommerce_envios_cod_pais');
            $table->integer('codcommerce_envios_pais');
            $table->integer('codcommerce_envios_valor_env');
            $table->integer('codcommerce_envios_empresatrans');
            $table->softDeletes();
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
        Schema::dropIfExists('codcommerce_envios');
    }
}
