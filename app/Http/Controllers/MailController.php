<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
    public function store(Request $request)
    {
    	Mail::send('emails.contact', $request->all(), function($msj){
    	$msj->subject('Correo de Contacto');
    	$msj->to('timeoutve@gmail.com');
    	$msj->to('jtorrealba3@gmail.com');
    	});

       //poner el mensaje
    	return Redirect::to('/');
    } 
}
