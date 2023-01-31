<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnFormacionAcademicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_formaciones_academicas')->insert([
            'persona_id'                 => 1,
            'pais_id'                    => 1,
            'ciudad_id'                  => 1,
            'institucion_id'             => 1,
            'estado_id'                  => 1,
            'nivel_id'                   => 1,
            'titulo'                     => 'LICENCIADO EN INFORMATICA',
            'fecha_inicio'               => '2010-01-01',
            'fecha_fin'                  => '2015-12-30',
            'provision_nacional'         => 1,
            'registro_profesional'       => '0000005648',
            'vigente'                    => 1,
            'created_at'                 => date('Y-m-d H:i:s'),
            'updated_at'                 => date('Y-m-d H:i:s'),
        ]);
    }
}
