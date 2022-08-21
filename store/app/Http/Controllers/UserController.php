<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Redirect;


class UserController extends Controller
{
    function Register(Request $request) {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['address'] = $request->address;
        $data['contact'] = $request->contact;
        $id = User::insertGetId($data);
        Session::put('id', $id);
        Session::put('name', $request->name);
        return Redirect::to('/');
    }

    function Login(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $result = User::where('email', $email)->where('password', $password)->first();

        if($result) {
            Session::put('id', $request->id);
            return Redirect::to('/');
        }
        else {
            return Redirect::to('/login');
        }
    }
}
