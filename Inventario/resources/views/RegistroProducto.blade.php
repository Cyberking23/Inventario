<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistroProducto</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 p-4">
            <div class="flex items-center mb-8">
                <svg class="w-8 h-8 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2Z"/>
                </svg>
                <span class="ml-2 text-xl font-semibold">Dashboard</span>
            </div>
            
            <nav class="space-y-2">
                <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>
                <a href="/home" class="flex items-center px-4 py-2 text-gray-600 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Productos
                </a>
                <a href="" class="flex items-center px-4 py-2 text-red-600 bg-red-50 rounded-lg">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Registrar Productos
                </a>
                
               
            </nav>
        </aside>

        <!-- Contenido principal -->
        <main class="flex-1 p-8">
            <div class="mb-8">
                <h1 class="text-2xl font-semibold">Registro de Productos</h1>
                
                <!-- Tabs -->
                <div class="flex border-b border-gray-200 mt-4">
                    <button class="px-4 py-2 text-sm text-red-600 border-b-2 border-red-500">
                        Todos los productos
                    </button>
                </div>
            </div>

            <!-- Formulario de Registro de Productos -->

            <h1 class="font-bold text-2xl text-center">Registrar Producto</h1>

                <div class="flex justify-center ">
                    <div class="flex mt-11  w-[80%] ">
                        <div class=" w-[50%] rounded-md mr-5">
                            <input type="text" class="p-5 w-[100%] border border-black rounded-xl" name="name" placeholder="Nombre de Producto">
                        </div>
                        <div class=" w-[50%] ">
                            <input type="text" class="p-5 w-[100%] border border-black rounded-xl" name="description" placeholder="Descripcion">
                        </div>
                    </div>
                </div>

                <div class="flex justify-center ">
                    <div class="flex mt-11  w-[80%] ">
                        <div class=" w-[50%] rounded-md mr-5">
                            <input type="text" class="p-5 w-[100%] border border-black rounded-xl" name="quantity" placeholder="Cantidad">
                        </div>
                        <div class=" w-[50%] ">
                            <input type="text" class="p-5 w-[100%] border border-black rounded-xl" name="category"  placeholder="Categoria">
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="flex mt-11  w-[80%] justify-center ">
                        <div class=" w-[50%] rounded-md mr-5">
                            <input type="text" class="p-5 w-[100%] border border-black rounded-xl" name="location"  placeholder="Ubicacion de Producto">
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="text-center bg-red-500 text-white mt-5 p-5 rounded-md cursor-pointer hover:bg-red-800">Registrar</button>
                </div>     
        </main>
    </div>
</body>
</html>