<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClInstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD MAYOR DE SAN ANDRES',
            'sigla'                 => 'UMSA',
            'tipo'                  => 1,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD MAYOR DE SAN SIMON',
            'sigla'                 => 'UMSS',
            'tipo'                  => 1,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD PRIVADA BOLIVIANA',
            'sigla'                 => 'UPB',
            'tipo'                  => 2,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD PRIVADA BOLIVIANA',
            'sigla'                 => 'UPB',
            'tipo'                  => 2,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD PRIVADA BOLIVIANA',
            'sigla'                 => 'UPB',
            'tipo'                  => 2,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD CATOLICA BOLIVIANA',
            'sigla'                 => 'UCB',
            'tipo'                  => 2,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD CRISTIANA DE BOLIVIA',
            'sigla'                 => 'UCDB',
            'tipo'                  => 2,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD SAN FRANCISCO XAVIER',
            'sigla'                 => 'UMPSFXCH',
            'tipo'                  => 1,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD DEL VALLE',
            'sigla'                 => 'UNIVALLE',
            'tipo'                  => 1,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD TECNICA DE ORURO',
            'sigla'                 => 'UTO',
            'tipo'                  => 1,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD TECNOLOGICA PRIVADA DE SANTA CRUZ',
            'sigla'                 => 'UTPSC',
            'tipo'                  => 2,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'UNIVERSIDAD PUBLICA DE EL ALTO',
            'sigla'                 => 'UPEA',
            'tipo'                  => 2,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_instituciones')->insert([
            'nombre'                => 'OTRO',
            'sigla'                 => 'OTRO',
            'tipo'                  => 1,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
    }
}
