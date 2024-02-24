<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
    public function index()
    {
        $computadoras = Computadora::all();

        return $computadoras;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['string', 'required', 'max:10'],
        ]);

        $obj = Computadora::create([
            'nombre' => $request->nombre
        ]);

        return $obj;
    }

    public function show(Computadora $computadora)
    {
        return $computadora;
    }

    public function update(Computadora $computadora, Request $request)
    {
        $validated = $request->validate([
            'nombre' => ['string', 'sometimes', 'max:10'],
            'estado' => ['string', 'sometimes', 'max:10'],
        ]);

        $computadora->update($request->all());

        return $computadora;
    }

    public function destroy(Computadora $computadora)
    {
        $computadora->delete();

        return 'Computadora eliminada!';
    }
}
