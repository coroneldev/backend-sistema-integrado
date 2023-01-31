<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClTipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_tipos_documentos')->insert([
            'descripcion'              => 'DATOS PERSONALES',
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_tipos_documentos')->insert([
            'descripcion'              => 'DATOS FAMILIARES',
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_tipos_documentos')->insert([
            'descripcion'              => 'DATOS ACADEMICOS',
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_tipos_documentos')->insert([
            'descripcion'              => 'EXPERIENCIA LABORAL',
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_tipos_documentos')->insert([
            'descripcion'              => 'DATOS LABORALES',
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_tipos_documentos')->insert([
            'descripcion'              => 'DECLARACIONES JURADAS',
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_tipos_documentos')->insert([
            'descripcion'              => 'IDIOMAS',
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_tipos_documentos')->insert([
            'descripcion'              => 'CURSOS',
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_tipos_documentos')->insert([
            'descripcion'              => 'OTROS',
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_tipos_documentos')->insert([
            'descripcion'              => 'DATOS DESVINCULACION',
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
    }
}
