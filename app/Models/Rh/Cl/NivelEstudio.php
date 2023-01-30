<?php

namespace App\Models\Rh\Cl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NivelEstudio extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_cl_niveles_estudios';
    protected $fillable = ['descripcion'];
}
