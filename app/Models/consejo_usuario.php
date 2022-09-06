<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consejo_usuario extends Model
{
    public $table = 'consejo_usuario';
    protected $fillable = [
        'user_id',
        'consejo_id'
    ];
}
