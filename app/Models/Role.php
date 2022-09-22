<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PermisoRole;
use App\Models\ConsejoRoleUser;

class Role extends Model
{
    use HasFactory;

    protected $table = "roles";
    protected $primaryKey = "id";

    protected $fillable = [
        'nombre',
    ];

    public function permiso_role()
    {
        return $this->belongsTo(PermisoRole::class, 'role_id');
    }

    public function consejo_user()
    {
        return $this->belongsTo(ConsejoRoleUser::class, 'role_id');
    }
}
