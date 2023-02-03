<?php

namespace App\Models\Rh\Trn;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User;
use App\Models\Rh\Cl\Rol;
use App\Models\Rh\Trn\Menu;

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

    public function usuarios()
    {
        return $this->hasMany(User::class, 'user_id');
    }
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }
    public function menus()
    {
        return $this->hasMany(Menu::class, 'menu_id');
    }
}
