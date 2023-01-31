<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_roles')->insert([
            'descripcion'          => 'SUPER ADMINISTRADOR',
            'vigente'              => 1,
            'created_at'           => date('Y-m-d H:i:s'),
            'updated_at'           => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_roles')->insert([
            'descripcion'          => 'ADMINISTRADOR',
            'vigente'              => 1,
            'created_at'           => date('Y-m-d H:i:s'),
            'updated_at'           => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_roles')->insert([
            'descripcion'          => 'USUARIO ESPECIAL',
            'vigente'              => 1,
            'created_at'           => date('Y-m-d H:i:s'),
            'updated_at'           => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_roles')->insert([
            'descripcion'          => 'USUARIO NORMAL',
            'vigente'              => 1,
            'created_at'           => date('Y-m-d H:i:s'),
            'updated_at'           => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_roles')->insert([
            'descripcion'          => 'REPORTE GERENCIAL',
            'vigente'              => 1,
            'created_at'           => date('Y-m-d H:i:s'),
            'updated_at'           => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_roles')->insert([
            'descripcion'          => 'REPORTE GENERICO',
            'vigente'              => 1,
            'created_at'           => date('Y-m-d H:i:s'),
            'updated_at'           => date('Y-m-d H:i:s'),
        ]);
    }
}
