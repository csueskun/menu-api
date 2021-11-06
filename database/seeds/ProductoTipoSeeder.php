<?php

use Illuminate\Database\Seeder;
use App\Negocio;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ProductoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto_tipos')->insert([
            'nombre' => 'Hamburguesa',
            'icon' => 'hamburguer',
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('producto_tipos')->insert([
            'nombre' => 'Pizza',
            'icon' => 'pizza',
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('producto_tipos')->insert([
            'nombre' => 'Bebida',
            'icon' => 'soda',
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('producto_tipos')->insert([
            'nombre' => 'Combo',
            'icon' => 'combo',
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('producto_tipos')->insert([
            'nombre' => 'Salchipapa',
            'icon' => 'papas',
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
