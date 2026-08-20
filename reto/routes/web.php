<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Herramienta;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
    $productos = App\Models\Producto::all(); 
    return view('welcome', ['productos' => $productos]);
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



Route::get('/login', function () {
    return view('login');
})->name('login'); 

Route::post('/login', function () {
    $credenciales = [
        'email' => request()->input('email'),
        'password' => request()->input('password')
    ];

    if (Auth::attempt($credenciales)) {
        request()->session()->regenerate();
        return redirect('/panel');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
});

Route::get('/panel', function () {
    return view('panel');
})->middleware('auth');

Route::post('/productos', function () {
    //Validar
    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer',
        'marca'  => 'required',
        'imagen' => 'required|image',
        'stock'  => 'required|integer|min:0'
    ]);

    $rutaImagen = request()->file('imagen')->store('img', 'public');

    App\Models\Producto::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio'),
        'marca'  => request()->input('marca'),
        'imagen' => $rutaImagen,
        'stock'  => request()->input('stock')
    ]);

    return redirect('/panel')->with('exito', 'Producto agregado');
})->middleware('auth');




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

