<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function LoginPage()
    {
        return view('pages.login-page');
    }

}
