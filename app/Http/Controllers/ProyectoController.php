<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyecto;
use App\Models\Cliente;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::with('cliente')->get();
        return view('proyectos.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('proyectos.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proyecto = new Proyecto();
        $proyecto->codigo = $request->codigo;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->fecha_fin = $request->fecha_fin;
        $proyecto->fecha_inicio = $request->fecha_inicio;
        $proyecto->cuantia = $request->cuantia;
        $proyecto->cliente_id = $request->cliente_id;
        $proyecto->save();

        return redirect()->route('proyectos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        $proyecto->load('cliente');
        return view('proyectos.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        $clientes = Cliente::all();
        return view('proyectos.edit', compact('proyecto', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {

        
        $proyecto->codigo = $request->codigo;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->fecha_fin = $request->fecha_fin;
        $proyecto->fecha_inicio = $request->fecha_inicio;
        $proyecto->cuantia = $request->cuantia;
        $proyecto->cliente_id = $request->cliente_id;
        $proyecto->save();

        return redirect()->route('proyectos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();

        return redirect()->route('proyectos.index');
    }
}
