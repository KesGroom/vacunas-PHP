<?php

namespace App\Http\Controllers;

use App\Mail\FormularioContacto;
use App\Mail\Maria_cano;
use App\Mail\MariaCano;
use Faker\Provider\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    public function send(){
        return view('emails.correo');
    }
    public function enviar(){
        $mensaje = request()->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required',
        ],
        [
            'nombre.required' => __('I need your name')
        ]);
        $correo = ['jusagaro28@gmail.com', 'mariacano.pov@gmail.com','kesgroom@gmail.com','jusagaro@misena.edu.co'];
        Mail::to($correo)->send( new Maria_cano($mensaje));
            
        return view('emails.correo');
    }
    //['nombre'=>'Pepe','','','']
    public function enviar2(){
        $mensaje = [
            'nombre' => 'Pedrito',
            'asunto' => 'Fue rechazado',
            'mensaje' => 'Postulse a otra',
        ];
     
        $correo = ['jusagaro28@gmail.com', 'mariacano.pov@gmail.com','kesgroom@gmail.com','jusagaro@misena.edu.co'];
        Mail::to($correo)->send( new Maria_cano($mensaje));
            
        return view('emails.correo');
    }
}
