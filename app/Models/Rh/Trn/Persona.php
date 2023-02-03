<?php

namespace App\Models\Rh\Trn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User;

use App\Models\Rh\Cl\EstadoCivil;
use App\Models\Rh\Cl\Genero;
use App\Models\Rh\Cl\Pais;
use App\Models\Rh\Cl\Ciudad;
use App\Models\Rh\Trn\DatoLaboral;
use App\Models\Rh\Trn\ExperienciaLaboral;
use App\Models\Rh\Trn\Curso;
use App\Models\Rh\Trn\Idioma;


class Persona extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_trn_personas';

    protected $fillable = [
        'user_id',
        'estado_civil_id',
        'genero_id',
        'pais_id',
        'ciudad_id',
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'cedula_identidad',
        'expedido_ci',
        'complemento_ci',
        'fecha_nacimiento',
        'telefono_fijo',
        'telefono_movil',
        'email_personal',
        'nro_nua_afp',
        'nombre_afp',
        'libreta_militar',
        'grupo_sanguineo',
        'nro_nit',
        'nombre_seguro_med',
        'nro_seguro_medico',
        'licencia_conducir',
        'licencia_categoria',
        'domicilio',
        'vigente',
        'identificador_dato_laboral',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function estadoCivil()
    {
        return $this->belongsTo(EstadoCivil::class, 'estado_civil_id');
    }
    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id');
    }
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id');
    }
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_id');
    }

    public function datoLaboral()
    {
        return $this->hasMany(DatoLaboral::class, 'id');
    }

    public function experienciaLaboral()
    {
        return $this->hasMany(ExperienciaLaboral::class, 'id');
    }

    public function curso()
    {
        return $this->hasMany(Curso::class, 'id');
    }

    public function idioma()
    {
        return $this->hasMany(Idioma::class, 'id');
    }
}
