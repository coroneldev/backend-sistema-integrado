<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_personas')->insert([
            'user_id'               =>   1,
            'estado_civil_id'       =>   1,
            'genero_id'             =>   1,
            'pais_id'               =>   1,
            'ciudad_id'             =>   1,
            'expedido_ci_id'        =>   1,
            'apellido_paterno'      =>  'CORONEL',
            'apellido_materno'      =>  'LAZO',
            'nombres'               =>  'REYNALDO',
            'cedula_identidad'      =>  '6833022',
            'complemento_ci'        =>  '0',
            'fecha_nacimiento'      =>  '1900-01-01',
            'telefono_fijo'         =>  '2818181',
            'telefono_movil'        =>  '76225703',
            'correo_personal'       =>  'reynaldo.coronel@gmail.com',
            'nro_nua_afp'           =>  '1234567879',
            'nombre_afp'            =>  'BBVA',
            'nro_libreta_militar'   =>  '988754',
            'grupo_sanguineo'       =>  'OR+',
            'nro_nit'               =>  '6120501018',
            'nombre_seguro_medico'  =>  'CAJA PETROLERA',
            'nro_seguro_medico'     =>  '659832',
            'licencia_conducir'     =>  'TRUE',
            'licencia_categoria'    =>  'A',
            'domicilio'             =>  'ESQUINA ASPIAZU NRO 54, ZONA SOPOCACHI',
            'vigente'               =>  1,
            'identificador_dato_laboral' =>  0,
            'estado_finalizacion'   =>  1,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),

        ]);
    }
}
