<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhClHorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_cl_horarios')->insert([
            'nombre'              => 'HORARIO CONTINUO',
            'hora_uno'            => '08:30',
            'hora_uno'            => '16:30',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
        DB::table('rh_cl_horarios')->insert([
            'nombre'              => 'HORARIO DISCONTINUO',
            'hora_uno'            => '08:30',
            'hora_uno'            => '18:30',
            'created_at'          => date('Y-m-d H:i:s'),
            'updated_at'          => date('Y-m-d H:i:s'),
        ]);
    }
}
