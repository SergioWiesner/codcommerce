<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCodcommerceConfg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codcommerce_confg', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcodcommerce_confg_pais');
            $table->string('idcodcommerce_confg_moneda');
            $table->integer('idcodcommerce_confg_med');
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
        Schema::dropIfExists('codcommerce_confg');
    }
}
