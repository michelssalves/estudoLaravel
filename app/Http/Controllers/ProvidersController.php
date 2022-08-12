<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;

class ProvidersController extends Controller{

    public function index(){
        
        return view('app.providers.index');
    }
    public function add(Request $request){
        if($request->input('_token' != '')){
            $rules = [
                'name' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email',
            ];

            $feedback = [
                'required' => 'The :attribute field must be filled',
                'name.min' => 'The name field must be at least 3 characters long',
                'name.max' => 'The name field must have a  maximum of 3 characters',
                'uf.min' => 'The name field must be at least 2 characters long',
                'uf.max' => 'The name field must have a  maximum of 2 characters',
                'email.max' => 'The email field was not filled in correctly'
            ];

            $request->validate($rules, $feedback);

            $provider = new Provider();
            $provider->create($request->all());
        }
        return view('app.providers.add');
    }
    public function list(){
        return view('app.providers.list');
    }
}


