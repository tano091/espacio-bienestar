<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    use HasFactory;

    protected $table = 'computadoras';

    protected $fillable = [
        'nombre',
        'estado'
    ];

    public function registros(){
        $this->hasMany(Registro::class);
    }
}
