<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsejoRoleUser extends Model
{
    use HasFactory;

    protected $table = 'consejo_role_user';
    protected $fillable = [
        'id',
        'consejo_id',
        'role_id',
        'user_id',
    ];
}
