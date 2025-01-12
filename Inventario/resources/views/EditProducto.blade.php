<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="container mx-auto px-4">
        <div class="max-w-lg mx-auto bg-white shadow-xl rounded-lg overflow-hidden">
            <!-- Encabezado -->
            <div class="bg-red-500 text-white text-center py-4">
                <h1 class="text-2xl font-bold">Editar Producto</h1>
                <p class="text-sm">Actualiza los datos del producto</p>
            </div>
            <!-- Formulario -->
            <div class="p-6">
                <form action="{{ route('tools.update', $tool->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT') <!-- Indica que se debe usar el método PUT -->

                    <!-- Nombre -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $tool->name) }}" 
                            placeholder="Nombre del producto"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                    </div>

                    <!-- Descripción -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                        <textarea name="description" id="description" rows="4" 
                            placeholder="Descripción del producto"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">{{ old('description', $tool->description) }}</textarea>
                    </div>

                    <!-- Cantidad -->
                    <div>
                        <label for="quantity" class="block text-sm font-medium text-gray-700">Cantidad</label>
                        <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $tool->quantity) }}" 
                            placeholder="Cantidad disponible"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                    </div>

                    <!-- Categoría -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Categoría</label>
                        <input type="text" name="category" id="category" value="{{ old('category', $tool->category) }}" 
                            placeholder="Categoría del producto"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                    </div>

                    <!-- Ubicación -->
                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700">Ubicación</label>
                        <input type="text" name="location" id="location" value="{{ old('location', $tool->location) }}" 
                            placeholder="Ubicación del producto"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                    </div>

                    <!-- Botón de guardar -->
                    <div class="flex justify-between">
                        <div class="mt-1">
                            <a href="/home" class="bg-blue-500 p-2 rounded-md text-white">Regresar</a>
                        </div>
                        <div>
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm shadow-md">
                                Guardar Cambios
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
