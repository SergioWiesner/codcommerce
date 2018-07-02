<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCodcommerceHitorial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codcommerce_hitorial', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codcommerce_hitorial_id_user');
            $table->string('codcommerce_hitorial_direccion');
            $table->integer('codcommerce_hitorial_valor_total');
            $table->integer('codcommerce_hitorial_envios');
            $table->integer('codcommerce_hitoria_emprea_env');
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
        Schema::dropIfExists('codcommerce_hitorial');
    }
}
