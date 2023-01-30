<?php

namespace App\Models\Rh\Cl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstructuraOrganizacional extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_cl_estructuras_organizacionales';

    public function datosLaborales()
    {
        return $this->hasMany(DatoLaboral::class, 'id');
    }
}
