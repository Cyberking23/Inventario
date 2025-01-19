<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Restablecer Contraseña</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form method="POST" action="{{ route('password.update') }}" class="bg-white shadow-md rounded-lg p-6 max-w-md w-full">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Restablecer Contraseña</h2>

        <!-- Campo Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
            <input 
                id="email" 
                type="email" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                placeholder="Ingresa tu correo electrónico"
            >
            @error('email')
                <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Campo Nueva Contraseña -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Nueva Contraseña</label>
            <input 
                id="password" 
                type="password" 
                name="password" 
                required 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                placeholder="Ingresa tu nueva contraseña"
            >
            @error('password')
                <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <!-- Campo Confirmar Contraseña -->
        <div class="mb-4">
            <label for="password-confirm" class="block text-sm font-medium text-gray-700">Confirmar Contraseña</label>
            <input 
                id="password-confirm" 
                type="password" 
                name="password_confirmation" 
                required 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                placeholder="Confirma tu nueva contraseña"
            >
        </div>

        <!-- Botón de Enviar -->
        <div>
            <button 
                type="submit" 
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
            >
                Restablecer Contraseña
            </button>
        </div>
    </form>
</body>
</html>
