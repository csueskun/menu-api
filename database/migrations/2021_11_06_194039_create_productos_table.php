<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{

    public function up()
    {
        Schema::create('productos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->decimal('precio', 8, 2)->default(0);
            $table->integer('producto_tipo_id')->unsigned();
            $table->foreign('producto_tipo_id')->references('id')->on('producto_tipos');
            $table->integer('negocio_id')->unsigned();
            $table->foreign('negocio_id')->references('id')->on('negocios');
            $table->boolean('destacado');
            $table->boolean('active');
            $table->string('foto')->default('default.jpg');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('productos');
    }
}
