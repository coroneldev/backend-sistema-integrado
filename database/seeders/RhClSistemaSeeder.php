<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RhClSistemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_sistemas')->insert([
            'nombre'              => 'RECURSOS HUMANOS',
            'vigente'             => 1,
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_sistemas')->insert([
            'nombre'              => 'ACTIVOS FIJOS',
            'vigente'             => 1,
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_sistemas')->insert([
            'nombre'              => 'PASAJES Y VIATICOS',
            'vigente'             => 1,
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_sistemas')->insert([
            'nombre'              => 'ARCHIVOS',
            'vigente'             => 1,
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_sistemas')->insert([
            'nombre'              => 'ALMACENES',
            'vigente'             => 1,
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_sistemas')->insert([
            'nombre'              => 'PROGRAMA OPERATIVO ANUAL',
            'vigente'             => 1,
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
    }
}
