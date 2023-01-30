<?php

namespace App\Models\Rh\Cl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Idioma extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'rh_cl_idiomas';

    public function idiomas()
    {
        return $this->hasMany(Idioma::class, 'id');
    }
}
