<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\ProjectController;

Route::get('/',[HomeController::class,'landing']);

Route::get('/login', [ProjectController::class, 'login']);
Route::get('/registro_tipo', [ProjectController::class, 'registro_tipo']);
Route::get('/registroComite', [ProjectController::class, 'registrocomite']);
Route::get('/registroDocente', [ProjectController::class, 'registrodocente']);
Route::get('/registroEstudiante', [ProjectController::class, 'registroestudiante']);
Route::get('/configuracionComite', [ProjectController::class, 'comiteconfig']);
// Route::get('/listado', [ProjectController::class, 'comiteListado']);
Route::get('/menu', [ProjectController::class, 'comiteMenu']);
Route::get('/nuevo', [ProjectController::class, 'comiteNueva']);
Route::get('/codigosala', [ProjectController::class, 'codigosala']);
Route::get('/configuracion', [ProjectController::class, 'configuracion']);
Route::get('/home_alumno', [ProjectController::class, 'home_alumno']);
Route::get('/info', [ProjectController::class, 'info']);
Route::get('/juego_estudiante', [ProjectController::class, 'juego_estudiante']);
Route::get('/juego_estudiante2', [ProjectController::class, 'juego_estudiante2']);
Route::get('/jugar', [ProjectController::class, 'jugar']);
Route::get('/menuprofesores', [ProjectController::class, 'menuprofesores']);
Route::get('/resultados_estudiante', [ProjectController::class, 'resultados_estudiante']);

Route::get('/listado', [PreguntaController::class, 'indexpreguntas']);
// Route::get('/listado', [PreguntaController::class, 'indexrespuestas']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
