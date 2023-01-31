<?php

namespace App\Models\Rh\Trn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parentesco extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_trn_parentescos';

    protected $fillable = [
        'persona_id',
        'parentesco_id',
        'expedido_ci_id',
        'nombres',
        'apellidos',
        'cedula_identidad',
        'direccion_laboral',
        'direccion_parentesco',
        'correo_electronico',
        'telefono',
        'vigente'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id');
    }
    
    public function parentesco()
    {
        return $this->belongsTo(Parentesco::class, 'parentesco_id');
    }

    public function expedido()
    {
        return $this->belongsTo(Ciudad::class, 'expedido_ci_id');
    }

}
