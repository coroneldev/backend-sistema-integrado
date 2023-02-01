<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnAccesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_accesos')->insert([
            'user_id'                  => 1,
            'sistema_id'               => 1,
            'roles_id'                 => 1,
            'vigente'                  => 1,
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_trn_accesos')->insert([
            'user_id'                  => 1,
            'sistema_id'               => 1,
            'roles_id'                 => 2,
            'vigente'                  => 1,
            'created_at'               => date('Y-m-d H:i:s'),
            'updated_at'               => date('Y-m-d H:i:s'),
        ]);

    }
}
