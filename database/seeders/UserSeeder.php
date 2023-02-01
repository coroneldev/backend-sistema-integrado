<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'apellido_paterno'         => 'SYS',
            'apellido_materno'         => 'SYS',
            'nombres'                  => 'SYS',
            'cedula_identidad'         => 'SYS',
            'email'                    => 'sys@hidrocarburos.com',
            'password'                 => bcrypt('SYS'),
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'apellido_paterno'         => 'CORONEL',
            'apellido_materno'         => 'LAZO',
            'nombres'                  => 'REYNALDO',
            'cedula_identidad'         => '6833022',
            'email'                    => 'reynaldo.coronel@hidrocarburos.com',
            'password'                 => bcrypt('6833022'),
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
    }
}
