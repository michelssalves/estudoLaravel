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



        $request->validate([
           'name' => 'required|min:3|max:40',
           'phone' => 'required',
           'email' => 'email',
           'reason_contact_id' => 'required',
           'message' => 'required|max:2000'
        ]);

        ContactSite::create($request->all());
        return redirect()->route('site.index');
    }
}

