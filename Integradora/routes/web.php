<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Herramienta;

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
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('contacto'); 
});

Route::post('/procesar', function (Request $request) {
    $nombre = $request->input('nombre');
    $email = $request->input('email');
    $mensaje = $request->input('mensaje');

    echo "<h2>Mensaje recibido en Laravel, caserito</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $email</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
    
    echo "<br><a href='/'>Volver a MacFix Shop</a>";
});
//Parte del parcial de Laravel, para el manejo de herramientas
Route::get('/herramientas', function () {
    $herramientas = App\Models\Herramienta::all();
    return view('herramientas', ['herramientas' => $herramientas]);
});

Route::get('/herramientas/nuevo', function () {
    return view('herramientas-nuevo');
});

Route::post('/herramientas/nuevo', function () {
    
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer'
    ], [
        'nombre.required' => 'Falta el nombre de la herramienta.',
        'precio.required' => 'Falta el precio de la herramienta.',
        'precio.integer'  => 'El precio se anota solo con cifras.'
    ]);

    App\Models\Herramienta::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio')
    ]);

    return redirect('/herramientas');
});