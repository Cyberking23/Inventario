<?php

use App\Http\Controllers\ToolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas se cargan a través de RouteServiceProvider y todas se asignan al
| grupo de middleware "web". ¡Haz algo genial!
*/

// Rutas de autenticación y verificación de correo electrónico
Auth::routes(['verify' => true]);

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.validate');
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware(['auth', 'signed'])->name('verification.notice');

Route::get('/password', function () {
    return view('Password');
});

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Rutas de usuario
Route::get('/registro', function () {
    return view('Registro');
})->name('registro');

Route::post('/registrar', [UserController::class, 'store'])->middleware('check.email.exists')->name('user.store');

Route::get('/mensaje', function () {
    return view('Mensaje');
})->name('mensaje.confirmation');

// Rutas de recuperación de contraseña
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])
    ->middleware('guest')
    ->name('password.update');

// Rutas de inicio y dashboard
Route::get('/', function () {
    return view('Login');
})->name('login.start');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [ToolController::class, 'index'])->name('home');
});

// Rutas relacionadas con productos
Route::get('/productos', [UserController::class, 'ShowRegister'])->name('productos.mostrar');
Route::get('/registroproducto', function () {
    return view('RegistroProducto');
})->name('productos.registrar');
Route::get('/editarproducto', function () {
    return view('EditProducto');
})->name('productos.editar');

// Rutas relacionadas con herramientas
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/tools/{id}/edit', [ToolController::class, 'edit'])->name('tools.edit');
    Route::put('/tools/{id}', [ToolController::class, 'update'])->name('tools.update');
    Route::delete('/tools/{id}', [ToolController::class, 'destroy'])->name('tools.destroy');
    Route::post('/tools', [ToolController::class, 'store'])->name('tools.store');
});
