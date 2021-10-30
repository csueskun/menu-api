<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NegociosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('negocios')->insert([
            'nombre' => str_random(10),
            'whatsapp' => str_random(10).'@gmail.com',
            'logo' => str_random(10).'.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
