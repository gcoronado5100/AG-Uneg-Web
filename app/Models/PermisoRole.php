<?php
/*Todo este bloque de comentario creo que esta mal


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Permiso;
use App\Models\Role;

class PermisoRole extends Model
{
    use HasFactory;

    protected $table = "permiso_role";
    protected $primaryKey = "id";

    protected $fillable = [
        'permiso_id',
        'role_id'
    ];

    public function permisos()
    {
        return $this->hasMany(Permiso::class, 'permiso_id');
    }

    public function roles()
    {
        return $this->hasMany(Role::class, 'role_id');
    }
}
*/
 