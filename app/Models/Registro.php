<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $table = 'registros';

    protected $fillable = [
        'alumno_id',
        'computadora_id',
        'horario_entrada',
        'horario_salida',
        'fecha'
    ];

    public function computadora(){
        $this->belongsTo(Computadora::class);
    }

    public function alumno(){
        $this->belongsTo(Alumno::class);
    }

}
