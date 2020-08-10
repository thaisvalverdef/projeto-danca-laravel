<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PerfilEmailController extends Controller
{
    public function create()
    {
        return view('perfil-publico');
    }

    public function store()
    {
        $emaildata = request()->validate([
            'name' => 'required', 
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to('test@test.com')->send(new ContactFormMail($emaildata));
    }
}
