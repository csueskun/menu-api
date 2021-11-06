<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('negocios', function (Blueprint $table) {
            $table->string('sms');
            $table->string('tema')->default('red');
            $table->boolean('recibe_whatsapp')->default(false);
            $table->boolean('recibe_sms')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('negocios', function (Blueprint $table) {
            $table->dropColumn('sms');
            $table->dropColumn('tema');
            $table->dropColumn('recibe_whatsapp');
            $table->dropColumn('recibe_sms');
        });
    }
}
