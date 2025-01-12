<?php

use App\Http\Controllers\ToolController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas se cargan a través de RouteServiceProvider y todas se asignan al
| grupo de middleware "web". ¡Haz algo genial!
|
*/

// Rutas relacionadas con el usuario
Route::get('/registro', function () {
    return view('Registro');
});


Route::post('/registrar',[UserController::class, 'store'])->middleware('check.email.exists')->name('user.store');

// Rutas relacionadas con la vista principal/login
Route::get('/', function () {
    return view('Login');
})->name('login');

// Rutas relacionadas con el dashboard
Route::get('/dashboard', function () {
    return view('Dashboard');
});

// Rutas relacionadas con productos
Route::get('/productos', function () {
    return view('RegistroProducto');
});

Route::get('/editarproducto', function () {
    return view('EditProducto');
});

// Rutas relacionadas con herramientas
Route::get('/home', [ToolController::class, 'index'])->name('home');

Route::delete('/tools/{id}', [ToolController::class, 'destroy'])->name('tools.destroy');

Route::get('/tools/{id}/edit', [ToolController::class, 'edit'])->name('tools.edit');
Route::put('/tools/{id}', [ToolController::class, 'update'])->name('tools.update');
