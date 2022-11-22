<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->all();
        Mail::send('enviar', $data, function ($message) {
            $message->from("site@meudominio.com.br")
                    ->to('suporte@meudominio.com.br')
                    ->subject('Contato');
        });   
    }
}
