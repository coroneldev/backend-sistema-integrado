<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnDatoLaboralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_datos_laborales')->insert([
            'persona_id'                                 => 1,
            'tipo_contrato_id'                           => 1,
            'estructura_organizacional_id'               => 1,
            'horario_id'                                 => 1,
            'puesto_id'                                  => 1,
            'organismo_financiador_id'                   => 1,
            'categoria_viaje_id'                         => 1,
            'clasificacion_id'                           => 1,
            'insumo'                                     => 'LLAVES',
            'insumo_devuelto'                            => 'DEVOLUCION DE INSUMOS ASIGNADOS AL FUNCIONARIO. LLAVES, CREDENCIALES.',
            'identificador_id'                           => 1,
            'fecha_inicio'                               => '2020-01-01',
            'fecha_fin'                                  => '2023-01-01',
            'motivo_desvinculacion'                      => 'VIGENTE',
            'nro_contrato'                               => '0',
            'nro_item'                                   => '123',
            'cas'                                        => 1,
            'nro_cas'                                    => '123456789',
            'nombre_banco'                               => 'BANCO UNION',
            'nro_cuenta_bancaria'                        => '123456789',
            'vigente'                                    => 1,
            'created_at'                                 => date('Y-m-d H:i:s'),
            'updated_at'                                 => date('Y-m-d H:i:s'),
        ]);
    }
}
