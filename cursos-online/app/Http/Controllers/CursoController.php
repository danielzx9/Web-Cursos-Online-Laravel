<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;


function create(){
    return view('admin.courses.create');
}

function store(Request $request){
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'categoria' => 'nullable|string',
        'precio' => 'required|numeric|min:0',
    ]);

    $curso = new Curso();
    $curso->user_id = auth()->user()->id;
    $curso->titulo = $request->titulo;
    $curso->descripcion = $request->descripcion;
    $curso->categoria = $request->categoria;
    $curso->precio = $request->precio;
    $curso->save();
    
    return redirect()->route('admin.courses.index')->with('success', 'Curso creado exitosamente');
}

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        //
    }
}
