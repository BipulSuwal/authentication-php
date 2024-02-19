<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
     public function logout(){
        auth()->logout();
        // return redirect('/');
        return view('main');
    }






    public function signin(Request $request){
        $incomingFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])){
            $request->session()->regenerate();
        }

        return view('main');
    }



    public function signup(Request $request){
        $incomingFields = $request->validate([
            'firstname' => ['required', 'min:3', 'max:10', Rule::unique('users', 'firstname')],
            'lastname' => ['required', 'min:3', 'max:10', Rule::unique('users', 'lastname')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'agree' => ['required'],
            'password' => ['required', 'min:8', 'max:200'],
            'confirmPassword' => ['required', 'min:8', 'max:200']
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return view('signin');
    }
}
