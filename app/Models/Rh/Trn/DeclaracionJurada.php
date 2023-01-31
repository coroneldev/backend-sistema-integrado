<?php

namespace App\Models\Rh\Trn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class DeclaracionJurada extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'rh_trn_declaraciones_juradas';
}
