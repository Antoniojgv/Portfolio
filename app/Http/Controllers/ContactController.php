<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{

    public function store(ContactRequest $request){

        $validated = $request->validated();

        //testing
        //return new ContactMail($validated);

        Contact::create($validated);

        Mail::to(env('USER_EMAIL'))->queue(new ContactMail($validated));




        return Redirect::back()->with(["success" => __("messages.contact_success")]);

    }

}
