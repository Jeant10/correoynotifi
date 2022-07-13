<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeCorreoRecibido;

class SugerenciasController extends Controller
{
    public function sendMails()
    {
        return view("sugerencias");
    }

    public function sendMailsProcessing()
    {
        $mensaje=request()->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'correo'=>'required | email',
            'asunto'=>'required',
            'mensaje'=>'required | min:5'
        ],[
            'required'=>'El campo :attribute es obligatorio',
            'mensaje.min'=>'El :attribute debe tener mas de 5 caracteres'
        ]);

        foreach (['prueba1web@outlook.com','byron.loarteb@epn.edu.ec'] as $recipient) {
            Mail::to($recipient)->queue(new MensajeCorreoRecibido($mensaje));
        }

        return 'Mensaje enviado';
    }
}
