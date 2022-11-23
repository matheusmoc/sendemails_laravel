<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function formulario()
    {
        return view('formulario');
    }

    public function enviar(Request $request)
    {
        $data = $request->all();
        Mail::send('enviar', $data, function ($message) {
            $message->from("matheusandrade009@gmail.com")
                    ->to('suporte@meudominio.com.br')
                    ->subject('Contato');
        });   
    }
}
