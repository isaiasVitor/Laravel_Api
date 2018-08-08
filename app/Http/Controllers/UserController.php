<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Signo;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function getAll(Request $request){
        $user = DB::table('tb_nomes')->orderBy('nome','asc')->get();
        if(!is_null($user))
            return response()->json(['data' => $user,
                                    'mensagem' => 'Lista de nomes Encontradas'],200);
        else
            return response()->json(['mensagem' => 'Lista de nomes Não Localizada'],404);
    }

    public function getNome(Request $request){
        $user = DB::table('tb_nomes')->where('nome','like', '%'. $request->nome . '%')->orderBy('nome','asc')->get();
        
        if(isset($user))
            return response()->json(['data' => $user,
                                    'mensagem '=> 'Nome Encontrado'],200);
        else
            return response()->json(['mensagem' => 'Este nome não foi encontrado'],404);
    }

    public function getSigno(Request $request){
                        
        $signo = DB::table('tb_signo')->get();
        if(isset($signo))
            return response()->json(['data' =>$signo,
                                    'mensagem'=> 'Signo Encontrado'], 200);
        else
            return response()->json(['Mensagem'=> 'Signo não Encontrado']);

    }
}
