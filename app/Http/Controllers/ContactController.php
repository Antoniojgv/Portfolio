<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{

    public function store(ContactRequest $request){

        $validated = $request->validated();

        Mail::to('antoniojesusgv@gmail.com','Portfolio')->send(new ContactMail($validated));

        return view('home');

    }

}
