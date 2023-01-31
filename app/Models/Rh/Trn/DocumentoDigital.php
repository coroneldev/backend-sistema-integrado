<?php

namespace App\Models\Rh\Trn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentoDigital extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'rh_trn_documentos_digitales';
    
    protected $fillable = [
        'tipo_documento_id',
        'persona_id',
        'usuario_validador_id',
        'id_registro_tabla',
        'enlace',
        'nombre_archivo',
        'edicion',
        'estado',
        'vigente',
        'motivo_solicitud',
        'observacion',
    ];
}
