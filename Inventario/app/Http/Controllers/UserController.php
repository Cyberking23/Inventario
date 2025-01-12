<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

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
    return redirect()->route('login');
}
    
}
