<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Consejo;
use App\Models\Role;
use App\Models\User;

class ConsejoRoleUser extends Model
{
    use HasFactory;

    protected $table = 'consejo_role_user';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'consejo_id',
        'role_id',
        'user_id',
    ];

    public function consejos()
    {
        return $this->hasMany(Consejo::class, 'consejo_id');
    }

    public function roles()
    {
        return $this->hasMany(Role::class, 'role_id');
    }

    public function users ()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
