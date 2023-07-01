<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function login()
    {
        return view('/vistas/login');
    }
    
    public function registro_tipo()
    {
        return view('/vistas/registro_tipo');
    }
    
    public function registrocomite()
    {
        return view('/vistas/registroComite');
    }
    
    public function registrodocente()
    {
        return view('/vistas/registroDocente');
    }
    
    public function registroestudiante()
    {
        return view('/vistas/registroEstudiante');
    }

    public function comiteconfig()
    {
        return view('/vistas/comiteConfi');
    }

    public function comiteListado()
    {
        return view('/vistas/comiteListado');
    }

    public function comiteMenu()
    {
        return view('/vistas/comiteMenu');
    }

    public function comiteNueva()
    {
        return view('/vistas/comiteNueva');
    }

    public function codigoSala()
    {
        return view('/vistas/codigosala');
    }

    public function configuracion()
    {
        return view('/vistas/configuracion');
    }

    public function home_alumno()
    {
        return view('/vistas/home_alumno');
    }

    public function juego_estudiante()
    {
        return view('/vistas/juego_estudiante');
    }

    public function juego_estudiante2()
    {
        return view('/vistas/juego_estudiante2');
    }

    public function jugar()
    {
        return view('/vistas/jugar');
    }

    public function menuprofesores()
    {
        return view('/vistas/menuprofesores');
    }

    public function resultados_estudiante()
    {
        return view('/vistas/resultados_estudiante');
    }

    public function info()
    {
        return view('/vistas/info');
    }

}
