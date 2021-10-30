<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNegociosTable extends Migration
{

    public function up()
    {
        Schema::create('negocios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('whatsapp');
            $table->string('logo');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('negocios');
    }
}
