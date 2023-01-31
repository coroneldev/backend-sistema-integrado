<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClEstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_estados')->insert([
            'seccion_id'            => '3',
            'descripcion'           => 'CONCLUIDO',
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estados')->insert([
            'seccion_id'            => '3',
            'descripcion'           => 'EN PROCESO',
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estados')->insert([
            'seccion_id'            => '3',
            'descripcion'           => 'EN CURSO',
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estados')->insert([
            'seccion_id'            => '6',
            'descripcion'           => 'LEE',
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estados')->insert([
            'seccion_id'            => '6',
            'descripcion'           => 'ESCRIBE',
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estados')->insert([
            'seccion_id'            => '6',
            'descripcion'           => 'HABLA',
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estados')->insert([
            'seccion_id'            => '9',
            'descripcion'           => 'MUY BUENO',
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_estados')->insert([
            'seccion_id'            => '9',
            'descripcion'           => 'BUENO',
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
        ]);
    }
}
