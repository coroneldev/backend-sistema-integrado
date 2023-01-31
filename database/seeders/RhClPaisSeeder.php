<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClPaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'BOLIVIA',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'CHILE',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'ARGENTINA',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'URUGUAY',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'PARAGUAY',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'COLOMBIA',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'PERU',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'ECUADOR',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'BRASIL',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'VENEZUELA',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'MEXICO',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'ESTADOS UNIDOS',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'RUSIA',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'GRECIA',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'JAPON',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_paises')->insert([
            'nombre'              => 'UCRANIA',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
    }
}
