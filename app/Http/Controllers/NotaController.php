<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Nota;

class NotaController extends Controller{

    public function crear (Request $request){

        $datos = $request->validate([
            'titulo' => ['required'],
            'descripcion' => ['required'],
            'img' => ['image', 'mimes:jpg,png,jpeg,gif,svg'],
            'grupo' => ['required']
        ]);
        $imgRuta = '';
        if ($request->hasfile('img')){
            $archivo = $request->file('img');
            $nombre = $archivo->getClientOriginalName();
            $archivo->move(public_path().'\img',$nombre);
            $imgRuta = 'img/'.$nombre;
        }
        $nota = Nota::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'img' => $imgRuta,
            'grupo_id' => $request->grupo,
        ]);
        return redirect()->intended('/grupo/'.$request->grupo);

    }
}