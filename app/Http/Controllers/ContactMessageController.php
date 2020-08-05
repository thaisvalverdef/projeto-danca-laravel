<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactMessageController extends Controller
{
    public function create()
    {
        return view('perfil');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);

        Mail::send('emails.contact-message', [
            'msg' => $request->message
        ], function ($mail) {
            $mail->from($request->email, $request->name);
            
            $mail->to('thaisvalverdef@gmail.com')->subject('Contato Professor');
        });

        return redirect()->back()->with('menssagem_rapida', 'Obrigada por entrar em contato :)');
    }
}
