<?php

namespace App\Http\Controllers;

use App\Models\Tool; // Importa el modelo Tool, que representa la tabla de herramientas en la base de datos
use Illuminate\Http\Request; // Importa la clase Request, utilizada para manejar las solicitudes HTTP

class ToolController extends Controller
{
    // Obtener todos los tools
    public function index()
    {
        // Obtiene solo las herramientas del usuario autenticado
        $tools = Tool::where('user_id', auth()->user()->id)->get();
    
        // Obtén el usuario autenticado
        $user = auth()->user();
    
        // Pasa las herramientas y el usuario a la vista
        return view('Home', compact('tools', 'user'));
    }

    // Crear un nuevo tool
    public function store(Request $request)
    {
        // Valida los datos recibidos en la solicitud
        $request->validate([
            'name' => 'required|string|max:255', // 'name' es obligatorio, debe ser una cadena y no exceder los 255 caracteres
            'description' => 'nullable|string', // 'description' es opcional, puede ser una cadena de texto
            'quantity' => 'required|integer', // 'quantity' es obligatorio y debe ser un número entero
            'category' => 'required|string|max:255', // 'category' es obligatorio, debe ser una cadena y no exceder los 255 caracteres
            'location' => 'nullable|string|max:255', // 'location' es opcional, puede ser una cadena de texto de máximo 255 caracteres
        ]);

        // Crea una nueva herramienta utilizando los datos validados de la solicitud
        $tool = Tool::create([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'category' => $request->category,
            'location' => $request->location,
            'user_id' => auth()->user()->id,
        ]);

        // Redirige al usuario a la página de productos con un mensaje de éxito
        return redirect()->route('home')->with('message', 'Producto registrado exitosamente');
    }

    // Obtener un tool por ID
    public function show($id)
    {
        // Busca la herramienta en la base de datos usando el ID proporcionado
        $tool = Tool::find($id);

        // Si la herramienta no se encuentra, devuelve un mensaje de error con un código de estado 404 (no encontrado)
        if (!$tool) {
            return response()->json(['message' => 'Herramienta no encontrada'], 404);
        }

        // Si la herramienta se encuentra, devuelve los datos de la herramienta en formato JSON con un código de estado 200 (éxito)
        return response()->json($tool, 200);
    }
    public function edit($id)
    {
        // Busca la herramienta en la base de datos usando el ID proporcionado
        $tool = Tool::find($id);

        // Si la herramienta no se encuentra, devuelve un mensaje de error con un código de estado 404 (no encontrado)
        if (!$tool) {
            return redirect('/home')->with('error', 'Herramienta no encontrada');
        }

        // Pasa la herramienta a la vista de edición
        return view('EditProducto', compact('tool'));
    }

    // Actualizar un tool por ID
    public function update(Request $request, $id)
    {
        // Busca la herramienta en la base de datos usando el ID proporcionado
        $tool = Tool::find($id);

        // Si la herramienta no se encuentra, devuelve un mensaje de error con un código de estado 404 (no encontrado)
        if (!$tool) {
            return response()->json(['message' => 'Herramienta no encontrada'], 404);
        }

        // Valida los campos que pueden ser actualizados
        $request->validate([
            'name' => 'nullable|string|max:255', // 'name' es opcional, debe ser una cadena y no exceder los 255 caracteres
            'description' => 'nullable|string', // 'description' es opcional, debe ser una cadena de texto
            'quantity' => 'nullable|integer', // 'quantity' es opcional, debe ser un número entero
            'category' => 'nullable|string|max:255', // 'category' es opcional, debe ser una cadena y no exceder los 255 caracteres
            'location' => 'nullable|string|max:255', // 'location' es opcional, debe ser una cadena de texto de máximo 255 caracteres
        ]);

        // Actualiza solo los campos que están presentes en la solicitud

        // Si 'name' está presente en la solicitud, se actualiza el campo 'name' en la base de datos
        if ($request->has('name')) {
            $tool->name = $request->input('name');
        }

        // Si 'description' está presente en la solicitud, se actualiza el campo 'description'
        if ($request->has('description')) {
            $tool->description = $request->input('description');
        }

        // Si 'quantity' está presente en la solicitud, se actualiza el campo 'quantity'
        if ($request->has('quantity')) {
            $tool->quantity = $request->input('quantity');
        }

        // Si 'category' está presente en la solicitud, se actualiza el campo 'category'
        if ($request->has('category')) {
            $tool->category = $request->input('category');
        }

        // Si 'location' está presente en la solicitud, se actualiza el campo 'location'
        if ($request->has('location')) {
            $tool->location = $request->input('location');
        }

        // Guarda los cambios realizados en la herramienta en la base de datos
        $tool->save();

        // Devuelve la herramienta actualizada en formato JSON con un código de estado 200 (éxito)
        return redirect('/home')->with('success', 'Producto actualizado exitosamente.');
    }

    // Eliminar un tool por ID
    public function destroy($id)
    {
        // Busca la herramienta en la base de datos usando el ID proporcionado
        $tool = Tool::find($id);
    
        // Si la herramienta no se encuentra, devuelve un mensaje de error con un código de estado 404 (no encontrado)
        if (!$tool) {
            // Redirige al índice de herramientas con un mensaje de error
            return redirect()->route('home')->with('error', 'Herramienta no encontrada');
        }
    
        // Si la herramienta se encuentra, la elimina de la base de datos
        $tool->delete();
    
        // Redirige al índice de herramientas con un mensaje de éxito
        return redirect()->route('home')->with('message', 'Herramienta eliminada');
    }
    
}
