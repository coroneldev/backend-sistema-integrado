<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnParentescoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_parentescos')->insert([
            'persona_id'            =>  1,
            'parentesco_id'         =>  1,
            'expedido_ci_id'        =>  1,
            'nombres'               => 'JUAN',
            'apellidos'             => 'PEREZ CONDORI',
            'cedula_identidad'      => '6120501',
            'direccion_laboral'     => 'CALLE MANUEL CARPIO NRO 22',
            'direccion_parentesco'  => 'ZONA SOPOCACHI',
            'correo_personal'    => 'JPEREZ@GMAIL.COM',
            'telefono'              => '2416525',
            'vigente'              => 1,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
    }
}
