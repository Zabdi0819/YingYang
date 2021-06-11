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
            'nombre' => 'Frida Sofia Martinez Becerril',
            'usuario' => 'frida1611',
            'contraseña' => 'FridayJoak1613',
            'correo' => 'sofia.becerril2016@gmail.com',
            'usuario_ig' => '@fridasofiabc11',
            'telefono' => '449458234',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
