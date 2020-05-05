<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailContacto;

class FrontController extends Controller
{
    public function sendMailContacto(Request $request){
        $message = [
            'nombre.required' => 'El campo de nombre es obligatorio',
            'apellidos.required' => 'El campo de apellido es obligatorio',
            'compania.required' => 'El campo de compañia es obligatorio',
            'email.required' => 'El campo de email es obligatorio',
            'telefono.required' => 'El campo de telefono es obligatorio',
            'servicio.required' => 'El campo de servicio es obligatorio',
        ];

        $this -> validate($request, [
            'nombre' => 'required',
            'apellidos' => 'required',
            'compania' => 'required',
            'email' => 'required|email',
            'telefono' => 'required|numeric|min:6',
            'servicio' => 'required',
        ], $message);

        Mail::to('wilberthg16@gmail.com') -> send(new MailContacto($request -> nombre, $request -> apellido, $request -> telefono, $request -> correo, $request -> mensaje));

        dd($request -> all());

        // return back()
        //     -> with('message_c', 'Gracias!, Pronto nos contactaremos contigo!');


    }
}
