<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    @vite('resources/css/app.css')

</head>
<body>
<div class="max-w-md mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Recuperar Contraseña</h2>
    @if (session('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
            <input 
                id="email" 
                type="email" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autofocus 
                class="mt-1 block w-full p-5 border border-black rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                placeholder="Ingresa tu correo"
            >
            @error('email')
                <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button 
                type="submit" 
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Enviar Enlace de Recuperación
            </button>
        </div>
    </form>
</div>

</body>
</html>