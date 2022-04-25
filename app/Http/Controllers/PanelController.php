<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Grupo;
use App\Models\User;

class PanelController extends Controller{

    public function mostrar (){
        $idUser = Auth::id();
        $usuario = User::where('id', $idUser)->get();
        $grupo_id = $usuario[0]->grupo_id;

        $grupos = Grupo::all();
        foreach($grupos as $grupo){
            if($grupo->id == $grupo_id){
                $grupo->estado = 1;
            }
        }
        return view('panel', ["grupos" => $grupos]);
    }

}