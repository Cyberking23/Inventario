<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                        <h1 class="font-bold">Nombre de la App</h1>
                    </div>
                </div>
                <h1 class="font-bold text-3xl mt-1 text-center mt-5">Welcome Back</h1>
                <div class="flex items-center mt-5">
                    <div class="flex-grow border-t border-gray-400"></div>
                    <h1 class="px-4 text-gray-600">Or login with</h1>
                    <div class="flex-grow border-t border-gray-400"></div>
                </div>
                <div class="pl-5">
                    <div>
                        <h1 class="font-bold">Email Address</h1>
                    </div>
                    <div class="ml-2">
                        <input class="border border-gray-300 rounded-sm mt-2 w-[75%] p-2" type="email" placeholder="Email">
                    </div>
                </div>
                <div class="pl-5 mt-5">
                    <div>
                        <h1 class="font-bold">Password </h1>
                    </div>
                    <div class="ml-2">
                        <input class="border border-gray-300 rounded-sm mt-2 w-[75%] p-2" type="password" placeholder="Password">
                    </div>
                </div>
            <div class="flex justify-center mt-5">
                    <button class="bg-blue-700 h-14 w-[75%] ">
                        <h1 class="text-white">Log In</h1>
                    </button>
            </div>
                <hr class="m-5">
                <div class="text-center mb-10">
                    <h1>Dont have account <span class="text-red-500">Sign Up</span></h1>   
                </div>
            </div>
            <div >
                <img src="{{ asset('images/Trabajo.jpg') }}" class="h-full w-[600px] rounded-r-lg" alt="">
            </div>
        </div>
    </div>

</body>
</html>