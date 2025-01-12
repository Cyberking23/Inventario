<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Users;
use Symfony\Component\HttpFoundation\Response;

class CheckEmailExists
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verifica si ya existe un usuario con el correo proporcionado
        $emailExists = Users::where('email', $request->email)->exists();

        if ($emailExists) {
            // Si el correo ya existe, devuelve una respuesta de error
            return response()->json(['error' => 'El correo electrónico ya está registrado.'], 400);
        }

        // Si no existe, continúa con la solicitud
        return $next($request);
    }
    
}
