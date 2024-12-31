<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    // Obtener todos los tools
    public function index()
    {
        return response()->json(Tool::all(), 200);
    }

    // Crear un nuevo tool
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
            'category' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        $tool = Tool::create($request->all());

        return response()->json($tool, 201);
    }

    // Obtener un tool por ID
    public function show($id)
    {
        $tool = Tool::find($id);

        if (!$tool) {
            return response()->json(['message' => 'Herramienta no encontrada'], 404);
        }

        return response()->json($tool, 200);
    }

    // Actualizar un tool por ID
    public function update(Request $request, $id)
    {
        $tool = Tool::find($id);

        if (!$tool) {
            return response()->json(['message' => 'Herramienta no encontrada'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer',
            'category' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        $tool->update($request->all());

        return response()->json($tool, 200);
    }

    // Eliminar un tool por ID
    public function destroy($id)
    {
        $tool = Tool::find($id);

        if (!$tool) {
            return response()->json(['message' => 'Herramienta no encontrada'], 404);
        }

        $tool->delete();

        return response()->json(['message' => 'Herramienta eliminada'], 200);
    }
}
