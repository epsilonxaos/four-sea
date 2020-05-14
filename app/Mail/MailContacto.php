<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailContacto extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "4Sea - Correo de contacto";

    // public $nombre;
    // public $apellidos;
    // public $compania;
    // public $email;
    // public $telefono;
    // public $servicio;
    // public $mensaje;

    public function __construct(Request $request)
    {
        $this -> nombre = $request -> nombre;
        $this -> apellidos = $request -> apellidos;
        $this -> compania = $request -> compania;
        $this -> email = $request -> email;
        $this -> telefono = $request -> telefono;
        $this -> servicio = $request -> servicio;
        $this -> mensaje = $request -> mensaje;
    }

    public function build()
    {
        return $this->view('mails.MailContacto')
        -> with([
            "nombre" => $this -> nombre,
            "apellidos" => $this -> apellidos,
            "compania" => $this -> compania,
            "email" => $this -> email,
            "telefono" => $this -> telefono,
            "servicio" => $this -> servicio,
            "mensaje" => $this -> mensaje,
        ]);
    }
}
