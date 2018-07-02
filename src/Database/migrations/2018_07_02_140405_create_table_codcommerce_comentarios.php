<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCodcommerceComentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codcommerce_comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codcommerce_comentarios_correo');
            $table->longText('codcommerce_comentarios_comentario');
            $table->integer('codcommerce_comentarios_producto');
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
        Schema::dropIfExists('codcommerce_comentarios');
    }
}
