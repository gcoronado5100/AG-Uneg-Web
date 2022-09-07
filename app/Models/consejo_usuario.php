<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consejo_Usuario extends Model
{
    use HasFactory;

    protected $table = 'consejo_usuarios';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'consejo_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function consejo()
    {
        return $this->belongsTo(Consejo::class, 'consejo_id');
    }

}
