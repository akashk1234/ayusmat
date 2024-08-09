<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function view_login(){
        return view('front-end.login');
    }

    public function view_register(){
        return view('front-end.register');
    }
}
