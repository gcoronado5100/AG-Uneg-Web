<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soporte extends Model
{
    use HasFactory;

    protected $table = 'soportes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'soporte_url',
        'punto_id',
    ];

    public function punto()
    {
        
    }
}
