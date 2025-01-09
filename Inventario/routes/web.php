<?php

use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/home', [ToolController::class, 'index'])->name('home');

Route::delete('/tools/{id}', [ToolController::class, 'destroy'])->name('tools.destroy');

Route::get('/', function(){
    return view("Login");
});

Route::get('/registro', function(){
    return view("Registro");
});

Route::get('/productos', function(){
    return view("RegistroProducto");
});




