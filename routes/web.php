<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RespuestaController;

Route::get('/',[HomeController::class,'landing']);

Route::get('/login', [ProjectController::class, 'login']);
Route::get('/registro_tipo', [ProjectController::class, 'registro_tipo']);
Route::get('/registroComite', [ProjectController::class, 'registrocomite']);
Route::get('/registroDocente', [ProjectController::class, 'registrodocente']);
Route::get('/registroEstudiante', [ProjectController::class, 'registroestudiante']);
Route::get('/configuracionComite', [ProjectController::class, 'comiteconfig']);//Configuracion preguntas respuestas
Route::get('/menu', [ProjectController::class, 'comiteMenu']); //Panel de preguntas
Route::get('/codigosala', [ProjectController::class, 'codigosala']);
Route::get('/configuracion', [ProjectController::class, 'configuracion']);
Route::get('/home_alumno', [ProjectController::class, 'home_alumno']);
Route::get('/info', [ProjectController::class, 'info']);
Route::get('/juego_estudiante', [ProjectController::class, 'juego_estudiante']);
Route::get('/juego_estudiante2', [ProjectController::class, 'juego_estudiante2']);
Route::get('/jugar', [ProjectController::class, 'jugar']);
Route::get('/menuprofesores', [ProjectController::class, 'menuprofesores']);
Route::get('/resultados_estudiante', [ProjectController::class, 'resultados_estudiante']);

Route::get('/listado', [PreguntaController::class,'index'])->name('preguntas.listado');
Route::get('/nuevo', [PreguntaController::class,'create']);
Route::post('/nuevo', [PreguntaController::class,'store'])->name('nuevo.store');
Route::delete('/{id_pregunta}/nuevo', [PreguntaController::class,'destroy'])->name('nuevo.destroy');

Route::get('/respuesta',[RespuestaController::class,'create'])->name('preguntas.create');
Route::post('/respuesta',[RespuestaController::class,'store'])->name('pregunta.store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
