<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exame;
use App\Procedimento;
use App\Usuario;

class ExamesController extends Controller
{
  public function cadastrarpaciente(){
    $procedimentos = Procedimento::all();
    return view('Exames.cadastrarpaciente')->with("procedimentos", $procedimentos);
  }
  public function store(Request $request)
  {
     $request->request->add(['user_id'=>'1'],['created_at' => date('Y-m-d H:i:s')],['updated_at' => date('Y-m-d H:i:s')]);
      Exame::create($request->all());
      return view ('Exames.cadastrarpaciente');
    }
    //
}
