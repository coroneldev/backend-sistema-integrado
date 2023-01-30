<?php

namespace App\Models\Rh\Cl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudad extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_cl_ciudades';

    protected $fillable = ['nombre_ciudad', 'sigla'];

    public function personas()
    {
        return $this->hasMany(Persona::class, 'id');
    }
    
}
