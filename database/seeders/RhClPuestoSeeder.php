<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClPuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_puestos')->insert([
            'denominacion'        => 'DESARROLLO DE SISTEMAS',
            'descripcion'         => 'TECNICO DE DESARROLLO DE SISTEMAS',
            'abreviatura'         => 'TDS',
            'nivel_salarial'      => '4',
            'haber_mensual'       => '50000',
            'nro_item'            => '000158',
            'vigente'             =>  1,
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
    }
}
