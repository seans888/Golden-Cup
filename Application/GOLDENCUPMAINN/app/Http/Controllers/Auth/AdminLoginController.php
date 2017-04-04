<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login()
    {
        //validate form
        $this->validate($_REQUEST, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        //attempt to log user
        Auth::attempt($credentials, $remember);



        //if successful, redirect to intended location

        // if unsuccessful
    }
}
