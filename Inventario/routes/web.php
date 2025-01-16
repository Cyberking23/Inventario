<?php

use App\Http\Controllers\ToolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------- 
| Web Routes
|--------------------------------------------------------------------------- 
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas 
| rutas se cargan a través de RouteServiceProvider y todas se asignan al 
| grupo de middleware "web". ¡Haz algo genial! 
*/

// Rutas relacionadas con el usuario
Route::get('/registro', function () {
    return view('Registro');
});

Route::post('/registrar', [UserController::class, 'store'])->middleware('check.email.exists')->name('user.store');

// Rutas de verificación de correo electrónico
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware(['auth', 'signed'])->name('verification.notice');

// Rutas relacionadas con la vista principal/login
Route::get('/', function () {
    return view('Login');
})->name('login.start');

Route::post('/login', [AuthController::class, 'login'])->name('login.validate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas relacionadas con el dashboard
Route::get('/dashboard', function () {
    return view('Dashboard');
})->name('dashboard');

// Rutas relacionadas con productos
Route::get('/productos', [UserController::class, 'ShowRegister'])->name('ShowRegister');
Route::get('/productos', function () {
    return view('RegistroProducto');
});
Route::get('/editarproducto', function () {
    return view('EditProducto');
});

// Rutas relacionadas con herramientas
Route::middleware('auth')->group(function () {
    Route::get('/home', [ToolController::class, 'index'])->name('home');
    Route::get('/tools/{id}/edit', [ToolController::class, 'edit'])->name('tools.edit');
    Route::put('/tools/{id}', [ToolController::class, 'update'])->name('tools.update');
    Route::delete('/tools/{id}', [ToolController::class, 'destroy'])->name('tools.destroy');
    Route::post('/tools', [ToolController::class, 'store'])->name('tools.store');
});
