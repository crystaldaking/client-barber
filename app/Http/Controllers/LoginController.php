<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $data = $request->only('phone','password');

        if (Auth::attempt($data)){

        }
    }
}
