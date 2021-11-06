<?php

use Illuminate\Database\Seeder;
use App\Negocio;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Sencilla',
            'precio' => 10000,
            'producto_tipo_id' => 1,
            'negocio_id' => 15,
            'destacado' => true,
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Mixta',
            'precio' => 12000,
            'producto_tipo_id' => 1,
            'negocio_id' => 15,
            'destacado' => true,
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Especial',
            'precio' => 14000,
            'producto_tipo_id' => 1,
            'negocio_id' => 15,
            'destacado' => true,
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Mexicana',
            'precio' => 35000,
            'producto_tipo_id' => 2,
            'negocio_id' => 15,
            'destacado' => true,
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Hawaiana',
            'precio' => 30000,
            'producto_tipo_id' => 2,
            'negocio_id' => 15,
            'destacado' => true,
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Pepsi 400ml',
            'precio' => 3000,
            'producto_tipo_id' => 3,
            'negocio_id' => 15,
            'destacado' => true,
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Cocacola 400ml',
            'precio' => 3000,
            'producto_tipo_id' => 3,
            'negocio_id' => 15,
            'destacado' => true,
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Hamburguesa sencilla + Pepsi 400ml',
            'precio' => 12000,
            'producto_tipo_id' => 4,
            'negocio_id' => 15,
            'destacado' => true,
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Hamburguesa especial + Pepsi 400ml',
            'precio' => 14000,
            'producto_tipo_id' => 4,
            'negocio_id' => 15,
            'destacado' => true,
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Personal',
            'precio' => 8000,
            'producto_tipo_id' => 5,
            'negocio_id' => 15,
            'destacado' => true,
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Grande',
            'precio' => 12000,
            'producto_tipo_id' => 5,
            'negocio_id' => 15,
            'destacado' => true,
            'active' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
