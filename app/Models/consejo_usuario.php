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

    public function User()
    {
        return $this->belongsTo("App\Models\User", "user_id", "id");
    }

    public function Consejo()
    {
        return $this->belongsTo("App\Models\Consejo", "consejo_id", "id");
    }
}
