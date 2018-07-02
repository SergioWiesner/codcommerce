<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCodcommerceImpuestos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codcommerce_impuestos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codcommerce_impuestos_nombre');
            $table->integer('codcommerce_impuestos_valor');
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
        Schema::dropIfExists('codcommerce_impuestos');
    }
}
