<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $fillable = [
        'pregunta',
        'especialidades',
        'ciclo',
        'curso',
        'modulo',
        'estado',
    ];

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class,'id_pregunta','id_pregunta');
    }
}