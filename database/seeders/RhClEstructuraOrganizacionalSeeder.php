<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClEstructuraOrganizacionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_estructuras_organizacionales')->insert([
            'nombre_dependencia'          => 'MINISTERIO DE HIDROCARBUROS Y ENERGIAS',
            'sigla'                       => 'MHE',
            'dependencia'                 => 0,
            'created_at'                  => date('Y-m-d H:i:s'),
            'updated_at'                  => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estructuras_organizacionales')->insert([
            'nombre_dependencia'          => 'UNIDAD DE TRANSPARENCIA Y LUCHA CONTRA LA CORRUPCION',
            'sigla'                       => 'UTLCC',
            'dependencia'                 => 1,
            'created_at'                  => date('Y-m-d H:i:s'),
            'updated_at'                  => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estructuras_organizacionales')->insert([
            'nombre_dependencia'          => 'UNIDAD DE AUDITORIA INTERNA',
            'sigla'                       => 'UAI',
            'dependencia'                 => 1,
            'created_at'                  => date('Y-m-d H:i:s'),
            'updated_at'                  => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estructuras_organizacionales')->insert([
            'nombre_dependencia'          => 'UNIDAD DE COMUNICACION SOCIAL',
            'sigla'                       => 'UCS',
            'dependencia'                 => 1,
            'created_at'                  => date('Y-m-d H:i:s'),
            'updated_at'                  => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estructuras_organizacionales')->insert([
            'nombre_dependencia'          => 'JEFATURA DE GABINETE',
            'sigla'                       => 'JG',
            'dependencia'                 => 1,
            'created_at'                  => date('Y-m-d H:i:s'),
            'updated_at'                  => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estructuras_organizacionales')->insert([
            'nombre_dependencia'          => 'DIRECCION GENERAL DE ASUNTOS ADMINISTRATIVOS',
            'sigla'                       => 'DGAA',
            'dependencia'                 => 1,
            'created_at'                  => date('Y-m-d H:i:s'),
            'updated_at'                  => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estructuras_organizacionales')->insert([
            'nombre_dependencia'          => 'DIRECCION GENERAL DE ASUNTOS JURIDICOS',
            'sigla'                       => 'DGAJ',
            'dependencia'                 => 1,
            'created_at'                  => date('Y-m-d H:i:s'),
            'updated_at'                  => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estructuras_organizacionales')->insert([
            'nombre_dependencia'          => 'DIRECCION GENERAL DE CONTROL Y FISCALIZACION',
            'sigla'                       => 'DGCF',
            'dependencia'                 => 1,
            'created_at'                  => date('Y-m-d H:i:s'),
            'updated_at'                  => date('Y-m-d H:i:s'),
        ]);
    }
}
