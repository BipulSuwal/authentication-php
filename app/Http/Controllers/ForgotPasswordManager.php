<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordManager extends Controller
{
    public function forgotPassword(){
        return view('forgot-password');
    }

    public function forgotPasswordPost(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);
        
        
    }
}
