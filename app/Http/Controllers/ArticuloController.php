<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{


    public function index()
    {
        $articulos = Articulo::all();
        return view('articulos.index', [
            'articulos' => $articulos
        ]);
    }

    // Definición del método en el Controlador:
    public function show(Articulo $articulo)
    {
        return view('articulos.show', ['articulo' => $articulo]);
    }

    public function create()
    {
        return view('articulos.create');
    }

    public function store(Request $request)
    {
        //Validar la petición:
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string'
        ]);
        /* Si la validación falla se redirigirá al usuario 
        a la página previa. Si pasa la validación, el controlador 
        continuará ejecutándose.
        */

        // Insertar el artículo en la BBDD tras su validación.
        Articulo::create($validated);

        return redirect(route('articulos.index'));
    }

    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
        return redirect(route('articulos.index'));

    }

    public function edit(Articulo $articulo)
    {
        return view('articulos.edit', [
            'articulo' => $articulo
        ]);
    }

    public function update(Request $request, Articulo $articulo)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string'
        ]);
        $articulo->update($validated);
        return redirect(route('articulos.show', $articulo));
    }
}
