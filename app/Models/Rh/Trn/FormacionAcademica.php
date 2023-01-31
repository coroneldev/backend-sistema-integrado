<?php

namespace App\Models\Rh\Trn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormacionAcademica extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_trn_formaciones_academicas';
    protected $fillable = [
        'persona_id',
        'pais_id',
        'ciudad_id',
        'institucion_id',
        'estado_id',
        'nivel_id',
        'titulo',
        'fecha_inicio',
        'fecha_fin',
        'provision_nacional',
        'registro_profesional',
        'vigente'
    ];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class, 'institucion_id');
    }
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id');
    }
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_id');
    }
    public function nivelEstudio()
    {
        return $this->belongsTo(NivelEstudio::class, 'nivel_id');
    }
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }
}
