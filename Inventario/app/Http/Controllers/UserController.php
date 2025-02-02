<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users', // Asegúrate de que el email sea único
            'password' => 'required|string|min:8', // Se recomienda una longitud mínima para contraseñas
        ]);
    
        // Guardar los datos en la base de datos
        $user = Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Cifrar la contraseña antes de guardarla
        ]);
    
        // Enviar correo de verificación
        $user->sendEmailVerificationNotification();
    
        // Redirigir o retornar una respuesta
        return redirect()->route('mensaje.confirmation')->with('status', 'We have sent you an email verification link!');
    }
    
    public function ShowRegister(Request $request){
        // Obtén el usuario autenticado
        $user = auth()->user();

        // Pasa el usuario a la vista
        return view('registroproducto', compact('user'));
   }


    public function showDashboard(Request $request){
         // Obtén el usuario autenticado
         $user = auth()->user();

         // Pasa el usuario a la vista
         return view('home', compact('user'));
    }
}
