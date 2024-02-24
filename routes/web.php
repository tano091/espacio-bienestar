<?php

use App\Http\Controllers\ComputadoraController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/admin');
});

Route::get('computadoras', [ComputadoraController::class, 'index']);
Route::post('computadora', [ComputadoraController::class, 'store']);
Route::get('computadora/{computadora}', [ComputadoraController::class, 'show']);
Route::put('computadora/{computadora}', [ComputadoraController::class, 'update']);
Route::delete('computadora/{computadora}', [ComputadoraController::class, 'destroy']);