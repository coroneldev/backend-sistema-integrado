<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhTrnDocumentoDigitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_trn_documentos_digitales')->insert([
            'tipo_documento_id'              => 1,
            'persona_id'                     => 1,
            //'usuario_validador_id'           => 1,
            'id_registro_tabla'              => 1,
            'enlace'                         => 'GDFGDHDJFHJKJJH64565423525',
            'nombre_archivo'                 => 'foto.jpg',
            'edicion'                        => 'true',
            'estado'                         => 'Pendiente',
            'vigente'                        => 'true',
            'motivo_solicitud'               => 'zczc',
            'observacion'                    => 'Ninguna',
            'created_at'                     => date('Y-m-d H:i:s'),
            'updated_at'                     => date('Y-m-d H:i:s'),
        ]);
    }
}
