<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageEmail;

class EmailController extends Controller
{
    public function formulario()
    {
        return view('formulario');
    }

    public function enviar(Request $request)
    {
        Mail::send('enviar', array(
            'name'      => $request -> input('name'),
            'email'     => $request -> input('email'),
            'subject'   => $request -> input('subject'),
            'message'  => $request -> input('message')
        ), function ($message) use ($request) {
            $message->from('matheusandrade009@gmail.com'); // para fazer teste por isso colocando meu email.
            $message->to($request->input('email'))->subject($request->input('message'));
        });

        return response()->json(['status' => 200, 'msg' => 'Mensagem enviada'])->redirect()->back();
    }
}
