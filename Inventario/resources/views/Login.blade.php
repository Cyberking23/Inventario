<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-screen bg-blue-500 flex items-center justify-center">
        <div class="bg-white w-[450px] p-8 rounded-lg shadow-lg">
            <!-- Logo y Título -->
            <div class="flex items-center justify-center mb-6">
                <img src="{{ asset('images/logo.jpg') }}" class="w-12 h-12" alt="Logo">
                <h1 class="text-xl font-bold ml-2">Management Center</h1>
            </div>

            <!-- Bienvenida -->
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">Welcome Back</h1>
            <p class="text-center text-gray-600 mb-6">Please login to your account</p>

            <!-- Línea divisora -->
            <div class="flex items-center mb-6">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="px-4 text-sm text-gray-500">Or login with</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <!-- Formulario -->
            <form action="{{ route('login.validate') }}" method="POST" class="space-y-4">
                @csrf
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input id="email" name="email" type="email" required placeholder="Enter your email" 
                        class="border border-gray-300 rounded-md w-full p-2 mt-1 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <!-- Contraseña -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required placeholder="Enter your password"
                        class="border border-gray-300 rounded-md w-full p-2 mt-1 focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div class="mt-5 flex">
                    <a href="{{ route('password.request') }}" class="text-blue-400 hover:text-blue-600">
                        Forgot Password?
                    </a>
                </div>

                <!-- Botón -->
                <div class="text-center">
                    <button type="submit" 
                        class="bg-blue-600 text-white rounded-md w-full py-2 font-semibold hover:bg-blue-700 transition">
                        Log In
                    </button>
                </div>
            </form>

            <!-- Registro -->
            <div class="text-center mt-6">
                <p class="text-sm text-gray-600">
                    Don’t have an account? 
                    <a href="/registro" class="text-blue-500 font-medium hover:underline">Register</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
