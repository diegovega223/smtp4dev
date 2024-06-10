<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnvioCorreoController extends Controller
{
    public function formularioEnviarCorreo()
    {
        return view('enviar_correo');
    }

    public function enviarCorreo(Request $request)
    {
        $asunto = $request->input('asunto');
        $contenido = $request->input('contenido');
        $destinatario = $request->input('destinatario');

        Mail::raw($contenido, function ($message) use ($destinatario, $asunto) {
            $message->to($destinatario)
                    ->subject($asunto);
        });

        return "Correo enviado correctamente a $destinatario";
    }
}
