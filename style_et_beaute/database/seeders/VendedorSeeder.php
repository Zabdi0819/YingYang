<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendedor')->insert([
            [
            'apellidos' => 'Martinez Becerril',
            'nombre' => 'Frida Sofia',
            'correo' => 'sofia.becerril2016@gmail.com',
            'usuario_ig' => '@fridasofiabc11',
            'telefono' => '4494582341',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
                'apellidos' => 'Durón de Luna',
                'nombre' => 'Ana Paola',
                'correo' => 'anita.deluna2016@gmail.com',
                'usuario_ig' => '@anita2001',
                'telefono' => '4493728912',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'apellidos' => 'Estrada Vazquez',
                'nombre' => 'Elizabeth',
                'correo' => 'eli.esva212@gmail.com',
                'usuario_ig' => '@eli0819',
                'telefono' => '4499837463',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'apellidos' => 'Perez Rodriguez',
                'nombre' => 'Jessica Alejandra',
                'correo' => 'jessi2021@gmail.com',
                'usuario_ig' => '@jessi1402',
                'telefono' => '4490981874',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'apellidos' => 'Contreras Romo',
                'nombre' => 'Veronica',
                'correo' => 'verocr.12@gmail.com',
                'usuario_ig' => '@vero_c',
                'telefono' => '4497642938',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
