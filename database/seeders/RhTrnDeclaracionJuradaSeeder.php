<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnDeclaracionJuradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_declaraciones_juradas')->insert([
            'persona_id'              => 1,
            'declaracion_jurada'      => 'DECLARACIÓN JURADA DE BIENES Y SERVICIOS',
            'fecha_inicio'            => '2022-01-01',
            'fecha_fin'               => '2022-12-31',
            'created_at'              => date('Y-m-d H:i:s'),
            'updated_at'              => date('Y-m-d H:i:s'),
        ]);
    }
}
