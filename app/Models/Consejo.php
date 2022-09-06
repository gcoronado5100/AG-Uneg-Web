<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consejo extends Model
{
    protected $table = 'consejos';
    protected $fillable = [
        'titulo',
        'user_id'
    ];

    public function User()
    {
        return $this->belongsTo("App\Models\User", "user_id", "id");
    }
}
