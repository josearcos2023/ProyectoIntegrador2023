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
    public function indexpreguntas(): View
    {
        $preguntas = Pregunta::all();
        $respuestas = Respuesta::pluck('respuesta','id_respuesta');
        return view('vistas.comiteListado',compact('preguntas','respuestas'));
    }
    // public function indexrespuestas(): View
    // {
    //     $respuestas = Respuesta::all();
    //     return view('vistas.comiteListado',compact('respuestas'));
    // }

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
        //
    }
}
