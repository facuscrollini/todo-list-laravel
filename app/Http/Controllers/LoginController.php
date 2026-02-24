<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if ($credentials) {

            if (Auth::attempt($credentials)) {
                return view('login', ['message' => "Credenciales correctas. Redirigiendo...", 'error' => false]);
            }


            return view('login', ['message' => 'Credenciales incorrectas', 'error' => true]);
        }

        return view('login');
    }
}
