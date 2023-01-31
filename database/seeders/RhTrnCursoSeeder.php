<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_cursos')->insert([
            'persona_id'               => 1,
            'estado_id'                => 1,
            'institucion_id'           => 1,
            'fecha_inicio'             => '2020-01-01',
            'fecha_fin'                => '2020-12-31',
            'nombre'                   => 'DESAROLLO DE APLICACIONES MOBILES',
            'duracion'                 => '12 MESES',
            'tipo'                     => 'CURSO',
            'vigente'                  => 1,
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
    }
}
