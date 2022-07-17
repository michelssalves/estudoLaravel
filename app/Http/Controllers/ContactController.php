<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        
        return view('site.contact', ['titulo' => 'Contact']);



    }
}

