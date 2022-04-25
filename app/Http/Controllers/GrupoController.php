<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Nota;
use App\Models\User;

class GrupoController extends Controller{

    public function mostrar ($idGrupo){
        $idUser = Auth::id();
        $usuario = User::where('id', $idUser)->get();

        if( empty($usuario[0]->grupo_id) ){
            return redirect()->intended('/panel');
        }else{
            if($usuario[0]->grupo_id == $idGrupo){
                $notas = Nota::where('grupo_id', $idGrupo)->get();
                return view('grupo', ["notas" => $notas, "id" => $idGrupo]);
            }else{
                return redirect()->intended('/panel');
            }
        }     
    }

    public function suscribir (Request $request){
        $datos = $request->validate([
            'grupo_id' => ['required'],
        ]);
        $idUser = Auth::id();
        User::where('id',$idUser)->update(['grupo_id'=>$request->grupo_id]);
        return redirect()->intended('/grupo/'.$request->grupo_id);
    }

    
}