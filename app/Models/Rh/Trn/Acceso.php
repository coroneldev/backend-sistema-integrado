<?php

namespace App\Models\Rh\Trn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Acceso extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'rh_trn_accesos';
    protected $fillable = [
        'user_id',
        'sistema_id',
        'rol_id',
        'vigente',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'roles_id');
    }
    public function sistema()
    {
        return $this->belongsTo(Sistema::class, 'sistema_id');
    }
}
