<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\CheckEmailExists;

class UserController extends Controller
{

    public function __construct()
    {
        // Aplica el middleware 'check.email.exists' solo en las rutas que manejan la creación de usuarios
        $this->middleware('check.email.exists')->only(['store']);
    }

    public function index()
    {
        // Obtiene todas las herramientas de la base de datos y las devuelve en formato JSON con un código de estado 200 (éxito)
        return response()->json(User::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return response()->json($user, 201); // 201 indica que se creó un recurso
    }
}
