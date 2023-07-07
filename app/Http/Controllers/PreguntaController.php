<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $preguntas = Pregunta::all();
        $respuestas = Respuesta::pluck('respuesta','estado');
        return view('vistas.comiteListado',compact('preguntas','respuestas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('vistas.comiteNueva');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pregunta'=>'required',
            'especialidades'=>'required',
            'ciclo'=>'required',
            'curso'=>'required',
            'modulo'=>'required'
        ]);
        $pregunta = $request->all();

        Pregunta::create($pregunta);

        return redirect()->route('preguntas.create')->with('success','Pregunta ingresada');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pregunta::destroy($id);
        return redirect('vistas.comiteListado')->with('flash_message','Pregunta eliminada');
    }
}
