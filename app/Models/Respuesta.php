<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'id_pregunta',
    //     'respuesta',
    //     'estado'
    // ];

    // public function preguntas()
    // {
    //     return $this->belongsTo(Pregunta::class,'id_pregunta','id_pregunta');
    // }

    protected $fillable = [
        'id_pregunta',
        'respuesta',
        'estado'
    ];

    public function preguntas()
    {
        return $this->belongsTo(Pregunta::class,'id_pregunta','id_pregunta');
    }
}
