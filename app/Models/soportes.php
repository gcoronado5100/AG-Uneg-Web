<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soportes extends Model
{
    public $table = 'soportes';
    protected $fillable = [
        'soporte_url',
        'punto_id'
    ];
}
