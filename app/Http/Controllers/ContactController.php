<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }

    public function send(ContactRequest $request)
    {
        Mail::to('faizeau.alexis@gmail.com')->send(new Contact($request->except('_token')));
        return view('contact');
    }
}
