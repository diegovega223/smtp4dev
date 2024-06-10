<?php

use App\Http\Controllers\EnvioCorreoController;
use Illuminate\Support\Facades\Route;



Route::get('/', [EnvioCorreoController::class, 'formularioEnviarCorreo'])->name('enviar.correo.formulario');
Route::post('/', [EnvioCorreoController::class, 'enviarCorreo'])->name('enviar.correo');

