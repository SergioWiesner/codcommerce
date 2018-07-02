<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCodcommerceValAtr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codcommerce_val_atr', function (Blueprint $table) {
            $table->integer('codcommerce_atributos_id');
            $table->integer('codcommerce_producto_id');
            $table->integer('codcommerce_valor');
            $table->integer('codcommerce_stock');
            $table->string('codcommerce_imagen');
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
        Schema::dropIfExists('codcommerce_val_atr');
    }
}
