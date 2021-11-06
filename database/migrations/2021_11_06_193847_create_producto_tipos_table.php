<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTiposTable extends Migration
{

    public function up()
    {
        Schema::create('producto_tipos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('icon');
            $table->boolean('active');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('producto_tipos');
    }
}
