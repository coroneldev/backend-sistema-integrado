<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_menus')->insert([
            'sistema_id'          => 1,
            'nombre'              => 'REGISTRO DATOS PERSONALES',
            'url'                 => '6FA9DD01EF8A9FCA6EDD0275A0F84F0B',
            'vigente'             => 1,
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);

        DB::table('rh_trn_menus')->insert([
            'sistema_id'          => 1,
            'nombre'              => 'DATOS LABORALES',
            'url'                 => '6FA9DD01EF8A9FCA6EDD0275A0F84F0B',
            'vigente'             => 1,
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_trn_menus')->insert([
            'sistema_id'          => 1,
            'nombre'              => 'ACTUALIZACION DE DATOS',
            'url'                 => '6FA9DD01EF8A9FCA6EDD0275A0F84F0B',
            'vigente'             => 1,
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
    }
}
