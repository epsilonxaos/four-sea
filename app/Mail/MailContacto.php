<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailContacto extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "4Sea - Correo de contacto";

    public $nombre;
    public $apellidos;
    public $compania;
    public $email;
    public $telefono;
    public $servicio;
    public $mensaje;

    public function __construct($nombre, $apellidos, $compania, $email, $telefono, $servicio, $mensaje)
    {
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> compania = $compania;
        $this -> email = $email;
        $this -> telefono = $telefono;
        $this -> servicio = $servicio;
        $this -> mensaje = $mensaje;
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
