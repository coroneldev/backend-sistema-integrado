<?php

namespace App\Models\Rh\Cl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parentesco extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'rh_cl_parentescos';


    protected $fillable = ['descripcion_parentesco'];

    public function parentescos()
    {
        return $this->hasMany(Persona::class, 'id');
    }
}
