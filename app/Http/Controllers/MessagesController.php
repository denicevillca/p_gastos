<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\mensajerec;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    
public function store(){
  
  $contacto= request()->validate([
'name' => 'required',
'email' => 'required',
'subject'=>'required',
'content'=>'required'

  ],[

  	'name.required'=>('Te falto tu nombre')
  ]); 

Mail::to('deniccee2@gmail.com')->queue(new mensajerec($contacto));

return new mensajerec($contacto);

}

}
