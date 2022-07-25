<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactSite;
use App\ReasonForContact;

class ContactController extends Controller
{
    public function contact(Request $request){    

        $reason_for_contact = ReasonForContact::all();
        /*
        $contact = new SiteContact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->reason = $request->input('reason');
        $contact->message = $request->input('message');
        $contact->save();
        print_r($contact->getAttributes());

        $contact = new SiteContact();
        $contact->create($request->all());*/

        return view('site.contact', ['titulo' => 'Contact', 'reason_for_contact' => $reason_for_contact]);

    }

    public function save(Request $request){

        $rules = [
            'name' => 'required|min:3|max:40|unique:contact_sites',
            'phone' => 'required',
            'email' => 'email',
            'reason_contact_id' => 'required',
            'message' => 'required|max:2000'
        ];
        $feedback = [
            'name.min' => 'The name field must have at least three characters',
            'name.max' => 'The name field must have a maximum of forty characters',
            'name.unique' => 'The registred name already exists ',
            'email.email' => 'The email provided is not valid',
            'message.max' => 'The message field must have a maximum of 2000 characters',
            'required' => 'The :attribute field must have filled'
        ];

        $request->validate($rules, $feedback);
        ContactSite::create($request->all());
        return redirect()->route('site.index');
    }
}

