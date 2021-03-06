<?php

namespace App\Http\Controllers;

use App\Information;
use App\Mail\NewClienteRegister;
use App\Mail\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CountdownController extends Controller
{
    public function index(){
        return view('layout');
    }

    public function register(Request $request)
    {

        $this->validate($request, [
            //'name' => 'required',
            'email' => 'required|unique:information,email',
            //'phone' => 'required|numeric'
        ]);

        $information = new Information;

        //$information->name = $request->name;
        $information->email = $request->email;
        //$information->phone = $request->phone;
        //$information->message = $request->message;
        $information->save();
        Mail::to($information->email)->send(new NewClienteRegister($information->name));
        return back()->with('exito', '¡Enviado con éxito!.');

    }

    public function newsletter(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|unique:information,email',
        ]);

        $information = new Information;
        $information->email = $request->email;
        $information->save();
        Mail::to($information->email)->send(new Newsletter());
        Mail::to('hola@creategicalatina.com')->send(new NewClienteRegister($information->email));
        return back()->with('exito', '¡Gracias por inscribirte! Hemos enviado un correo electrónico de confirmación.');

    }
}
