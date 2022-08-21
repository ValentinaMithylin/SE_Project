<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function Login() {
        return view('SignUp_Login.login');
    }

    function Sign_up() {
        return view('SignUp_Login.signup');
    }
}
