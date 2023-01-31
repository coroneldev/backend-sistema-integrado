<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnExperienciaLaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_experiencias_laborales')->insert([
            'persona_id'                     => 1,
            'lugar_trabajo'                  => 'EMPRESA DE DESARROLLO DE SOFTWARE',
            'fecha_inicio'                   => '2020-01-31',
            'fecha_fin'                      => '2020-12-31',
            'cargo_desempeniado'              => 'DESARROLLO DE SISTEMAS',
            'funcion_desempeniada'            => 'TECNICO EN DESARROLLO DE SISTEMAS',
            'nombre_inmediato_superior'      => 'ING. JOSE RODRIGUEZ',
            'cargo_inmediato_superior'       => 'RESPONSABLE DE SISTEMAS INFORMATICOS',
            'salario_percibido'              => '5000',
            'motivo_desvinculacion'          => 'CULMINO CONTRATO',
            'vigente'                        => 1,
            'created_at'                     => date('Y-m-d H:i:s'),
            'updated_at'                     => date('Y-m-d H:i:s'),
        ]);
    }
}
