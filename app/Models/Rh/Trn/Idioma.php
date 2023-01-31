<?php

namespace App\Models\Rh\Trn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Idioma extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_trn_idiomas';

    protected $fillable = [
        'persona_id',
        'idioma_id',
        'estado_id',
        'nivel_conocimiento_id',
        'vigente',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id');
    }
    public function idioma()
    {
        return $this->belongsTo(Idioma::class, 'idioma_id');
    }
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }
    public function nivelConocimiento()
    {
        return $this->belongsTo(Estado::class, 'nivel_conocimiento_id');
    }
}
