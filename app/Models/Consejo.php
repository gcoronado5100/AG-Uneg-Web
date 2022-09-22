<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ConsejoRoleUser;
use App\Models\ConsejoPunto;
use App\Models\Agenda;

class Consejo extends Model
{
    use HasFactory;

    protected $table = 'consejos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nombre',
        'descripcion'
    ];

    public function consejo_user()
    {
        return $this->belongsTo(ConsejoRoleUser::class, 'consejo_id');
    }

    public function consejo_punto()
    {
        return $this->belongsTo(ConsejoPunto::class, 'consejo_id');
    }

    public function agenda()
    {
        return $this->belongsTo(Agenda::class, 'consejo_id');
    }

}
