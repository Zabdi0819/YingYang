<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert([
            [
                'nombre' => 'blusa',
                'descripcion' => 'Blusa de manga corta color negro',
                'precio' => '150',
                'existencias' => '1',
                'vend_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'blusa',
                'descripcion' => 'blusa sin manga color gris',
                'precio' => '200',
                'existencias' => '2',
                'vend_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'blusa',
                'descripcion' => 'blusa sin manga color rojo',
                'precio' => '200',
                'existencias' => '2',
                'vend_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'vestido',
                'descripcion' => 'vestido de noche color azul rey',
                'precio' => '400',
                'existencias' => '1',
                'vend_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'blusa',
                'descripcion' => 'blusa manga larga color rojo',
                'precio' => '115',
                'existencias' => '4',
                'vend_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'blusa',
                'descripcion' => 'blusa manga larga color negro',
                'precio' => '115',
                'existencias' => '3',
                'vend_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'pantalon',
                'descripcion' => 'pantalon de mezclilla azul cielo',
                'precio' => '250',
                'existencias' => '5',
                'vend_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'top',
                'descripcion' => 'top color rojo',
                'precio' => '180',
                'existencias' => '6',
                'vend_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'top',
                'descripcion' => 'top color gris',
                'precio' => '180',
                'existencias' => '2',
                'vend_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'top',
                'descripcion' => 'top color amarillo',
                'precio' => '180',
                'existencias' => '3',
                'vend_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'top',
                'descripcion' => 'top color negro',
                'precio' => '180',
                'existencias' => '1',
                'vend_id' => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'short',
                'descripcion' => 'short negro  de mezclilla',
                'precio' => '200',
                'existencias' => '4',
                'vend_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'pantalon',
                'descripcion' => 'pantalon negro  de mezclilla',
                'precio' => '230',
                'existencias' => '4',
                'vend_id' => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'blusa',
                'descripcion' => 'blusa termica color azul rey',
                'precio' => '80',
                'existencias' => '6',
                'vend_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'blusa',
                'descripcion' => 'blusa termica color negro',
                'precio' => '80',
                'existencias' => '6',
                'vend_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'blusa',
                'descripcion' => 'blusa termica color blanca',
                'precio' => '80',
                'existencias' => '6',
                'vend_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'nombre' => 'blusa',
                'descripcion' => 'blusa termica color cafe',
                'precio' => '80',
                'existencias' => '6',
                'vend_id' => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
