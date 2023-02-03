<?php

namespace App\Models\Rh\Trn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Rh\Trn\Persona;
use App\Models\Rh\Cl\TipoContrato;
use App\Models\Rh\Cl\EstructuraOrganizacional;
use App\Models\Rh\Cl\Horario;
use App\Models\Rh\Cl\Puesto;
use App\Models\Rh\Cl\OrganismoFinanciador;
use App\Models\Rh\Cl\CategoriaViaje;
use App\Models\Rh\Cl\Clasificacion;
use App\Models\Rh\Cl\Identificador;


class DatoLaboral extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'rh_trn_datos_laborales';

    protected $fillable = [
        'persona_id',
        'tipo_contrato_id',
        'estructura_organizacional_id',
        'horario_id',
        'puesto_id',
        'organismo_financiador_id',
        'categoria_viaje_id',
        'clasificacion_id',
        'insumo',
        'insumo_devuelto',
        'identificador_id',
        'fecha_inicio',
        'fecha_fin',
        'motivo_desvinculacion',
        'nro_contrato',
        'nro_item',
        'cas',
        'nro_cas',
        'nombre_banco',
        'vigente',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id');
    }
    
    public function tipoContrato()
    {
        return $this->belongsTo(TipoContrato::class, 'tipo_contrato_id');
    }
    public function estructuraOrganizacional()
    {
        return $this->belongsTo(EstructuraOrganizacional::class, 'estructura_organizacional_id');
    }
    public function horario()
    {
        return $this->belongsTo(Horario::class, 'horario_id');
    }
    public function puesto()
    {
        return $this->belongsTo(Puesto::class, 'puesto_id');
    }
    public function organismoFinanciador()
    {
        return $this->belongsTo(OrganismoFinanciador::class, 'organismo_financiador_id');
    }
    public function categoriaViaje()
    {
        return $this->belongsTo(CategoriaViaje::class, 'categoria_viaje_id');
    }
    public function clasificacion()
    {
        return $this->belongsTo(Clasificacion::class, 'clasificacion_id');
    }
    public function identificador()
    {
        return $this->belongsTo(Identificador::class, 'identificador_id');
    }

}
