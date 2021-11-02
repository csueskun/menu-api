<?php

use Illuminate\Database\Seeder;
use App\Negocio;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nombre' => str_random(10),
            'password' => Hash::make(str_random(10)),
            'active_session' => false,
            'negocio_id' => factory(Negocio::class)->create([
                'nombre'=>str_random(10),
                'whatsapp'=>str_random(10),
                'logo'=>str_random(10),
            ])->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
