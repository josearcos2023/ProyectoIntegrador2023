<?php

namespace App\Http\Controllers;

use App\Models\Ciclo;
use App\Models\Curso;
use App\Models\Especialidad;
use App\Models\Modulo;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $especialidad=Especialidad::all();
        $curso=Curso::all();
        $modulo=Modulo::all();
        $ciclo=Ciclo::all();
        return view('vistas.comiteNueva',compact('especialidad','curso','modulo','ciclo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pregunta'=>'required',
            'especialidad'=>'required',
            'ciclo'=>'required',
            'curso'=>'required',
            'modulo'=>'required'
        ]);

        $pregunta = $request->pregunta;
        $especialidad = $request->especialidad;
        $ciclo = $request->ciclo;
        $curso = $request->curso;
        $modulo = $request->modulo;

        DB::insert('insert into preguntas (pregunta,id_especialidad,id_ciclo,id_curso, id_modulo) 
        values (?, ?, ?, ?, ?)', [$pregunta, $especialidad, $ciclo, $curso, $modulo]);

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
    public function destroy(Pregunta $id_pregunta)
    {
        $deleted=DB::table('preguntas')->where('id_pregunta','=',$id_pregunta)->delete();

        return redirect('/listado');
    }
}
