<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function register(Request $request)
    {

        $email = $request->input('email');
        $name = $request->input('name');
        $password = $request->input('password');


        if ($email && $name && $password) {

            $user = User::where('email', $email)->first();

            if($user){
                 return view('register', ['message'=> "Ya existe dicho usuario", 'error'=> true]);
            }
            User::create([
                'email' => $email,
                'name' => $name,
                'password' => Hash::make($password)
            ]);

            return view('register', ['message'=> "Usuario creado correctamente. Redirigiendo...", 'error'=>false]);
        }


        return view('register');
    }
}
