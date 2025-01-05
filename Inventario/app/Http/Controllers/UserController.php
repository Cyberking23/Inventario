<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        // Obtiene todas las herramientas de la base de datos y las devuelve en formato JSON con un código de estado 200 (éxito)
        return response()->json(User::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
         $user = User::create($request->all());
    
        return response()->json($user, 201); // 201 indica que se creó un recurso
    }
}
