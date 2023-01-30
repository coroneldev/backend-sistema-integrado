<?php

namespace App\Models\Rh\Cl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institucion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_cl_instituciones';
    protected $fillable = ['nombre', 'sigla', 'tipo'];


    public function curso()
    {
        return $this->hasMany(Curso::class, 'id');
    }
}
