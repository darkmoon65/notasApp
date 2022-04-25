<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
            return redirect()->intended('/panel');
        }

        throw ValidationException::withMessages([
            'email' => trans('auth.failed')
        ]);
    }

    public function salir(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}