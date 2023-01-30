<?php

namespace App\Models\Rh\Cl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estado extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_cl_estados';
    protected $fillable = ['seccion_id', 'descripcion'];


    public function curso()
    {
        return $this->hasMany(Curso::class, 'id');
    }

    public function idiomas()
    {
        return $this->hasMany(Idioma::class, 'id');
    }
}
