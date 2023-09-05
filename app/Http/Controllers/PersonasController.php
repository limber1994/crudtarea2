<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Personas::orderBy('paterno','desc')->paginate(3);
        return view('inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //formulario para garegar datos
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //para guaradar datos en bd
        $personas = new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route("personas.index")->with("success", "Agregado con exito!");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //para obtener registro de la tabla
        $personas = Personas::find($id);
        return view("eliminar", compact('personas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //sirve para traer los datos que se vana editar y los coloco en u formulario
        $personas = Personas::find($id);
        return view("actualizar", compact('personas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //actualiza los datos en bd
        $personas = Personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $personas = personas::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito");
    }
}
