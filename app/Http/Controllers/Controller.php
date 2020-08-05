<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

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
        ], function ($mail) use($request) {
            $mail->from($request->email, $request->name);
            $mail->to('thaisvalverdef@gmail.com')-> subject('Contato Professo');
        });

        return redirect()->back()->with('menssagem_rapida', 'Obrigada por entrar em contato :)');
    }


}