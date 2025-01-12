<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     // Procesa el inicio de sesión
     public function login(Request $request)
     {
         $credentials = $request->validate([
             'email' => 'required|email',
             'password' => 'required',
         ]);
 
         if (Auth::attempt($credentials)) {
             // Autenticación exitosa
             $request->session()->regenerate();
 
             return redirect()->intended('/dashboard');
         }
 
         // Autenticación fallida
         return back()->withErrors([
             'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
         ])->onlyInput('email');
     }
 
     // Cierra la sesión
     public function logout(Request $request)
     {
         Auth::logout();
 
         $request->session()->invalidate();
         $request->session()->regenerateToken();
 
         return redirect('/');
     }
}
