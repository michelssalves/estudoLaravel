<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request){

        $error = '';

        if ($request->get('error') == 1){

            $error = 'User or password incorrect';
        }

        return view('site.login', ['titulo' => 'Login', 'error' => $error]);

    }
    public function authenticate(Request $request){

        $rules =[
            'user' => 'email',
            'password' => 'required'
        ];

        $feedback = [

            'user.email' => 'The username field(e-mail) is mandatory',
            'password.required' => 'The password field is mandatory'
        ];

        $request->validate($rules, $feedback);

        $email = $request->get('user');
        $password = $request->get('password');

        $user = new User();

        $user = $user->where('email', $email)->where('password', $password)->get()->first();


        if(isset($user->name)){
            echo 'existe';
        }else{
            return redirect()->route('site.login', ['error' => 1]);
        }
        
    }
}
