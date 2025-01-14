<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255', // Asegúrate de que el email sea único
            'password' => 'required|string|min:2', // Se recomienda una longitud mínima para contraseñas
        ]);

        // Guardar los datos en la base de datos
        $user = Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Cifrar la contraseña antes de guardarla
        ]);

        // Redirigir o retornar una respuesta
        return redirect()->route('login.start');
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
