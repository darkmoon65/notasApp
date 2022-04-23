<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function mostrar()
    {
        return view('login');
    }

    public function autentificar(Request $request)
    {
        $credenciales = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return redirect()->intended('welcome');
        }

        return back()->withErrors([
            'email' => 'El correo no se encuentra'
        ])->onlyInput('email');
    }
}