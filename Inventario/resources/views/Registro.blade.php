<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class=" h-screen bg-blue-500 flex items-center justify-center">
        <div class="flex">
            <div class=" bg-white w-[500px] p-10 rounded-s-xl ">
                <div class="flex items-center justify-center   ">
                    <div>
                        <img src="{{ asset('images/logo.jpg') }}" class="w-10" alt="">
                    </div>
                    <div class="flex items-center">
                        <h1 class="font-bold">Managment Center</h1>
                    </div>
                </div>
                <h1 class="font-bold text-3xl mt-1 text-center mt-5">Welcome Back</h1>

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="pl-5 pt-5">
                        <div>
                            <h1 class="font-bold">Nombre Completo</h1>
                        </div>
                        <div class="ml-2">
                            <input class="border border-gray-300 rounded-sm mt-2 w-[75%] p-2" autocomplete="name"  type="text" name="name" placeholder="Nombre" required>
                        </div>
                    </div>

                    <div class="pl-5 pt-3">
                        <div>
                            <h1 class="font-bold">Email Address</h1>
                        </div>
                        <div class="ml-2">
                            <input 
                                class="border border-gray-300 rounded-sm mt-2 w-[75%] p-2 @error('email') border-red-500 @enderror" 
                                name="email" 
                                type="email" 
                                placeholder="Email" 
                                value="{{ old('email') }}" 
                                autocomplete="email" 
                                required>
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="pl-5 mt-5">
                        <div>
                            <h1 class="font-bold">Password</h1>
                        </div>
                        <div class="ml-2">
                            <input class="border border-gray-300 rounded-sm mt-2 w-[75%] p-2" name="password" autocomplete="password" type="password" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="flex justify-center mt-5">
                        <button type="submit" class="bg-blue-700 h-14 w-[75%]">
                            <h1 class="text-white">Registro</h1>
                        </button>
                    </div>
                </form>



                <hr class="m-5">
                <div class="text-center mb-10">
                    <a href="/"><h1>Do you already have an account <span class="text-red-500">Log In</span></h1></a>   
                </div>
            </div>
            <div>
                <img src="{{ asset('images/Trabajo.jpg') }}" class="h-full w-[600px] rounded-r-lg" alt="">
            </div>
        </div>
    </div>
</body>
</html>
