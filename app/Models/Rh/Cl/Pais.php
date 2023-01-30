<?php

namespace App\Models\Rh\Cl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pais extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_cl_paises';

    protected $fillable = ['nombre_pais'];

    public function personas()
    {
        return $this->hasMany(Persona::class, 'id');
    }
}
