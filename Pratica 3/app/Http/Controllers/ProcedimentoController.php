<?php

namespace App\Http\Controllers;
use App\Procedimento;
use Illuminate\Http\Request;

class ProcedimentoController extends Controller
{
  public function index()
  {
    $procedimentos = Procedimento::all();
    return view('Procedimentos.lista')->with("procedimentos", $procedimentos);
    //
  }
  public function listar(){
  $procedimentos = Procedimento::all();
  return view('Procedimentos.lista')->with("procedimentos", $procedimentos);
  }
  public function listaradmin(){
  $procedimentos = Procedimento::all();
  return view('Procedimentos.adminlistar')->with("procedimentos", $procedimentos);
  }
  public function cadastraradmin(){
  $procedimentos = Procedimento::all();
  return view('Procedimentos.admincadastrar')->with("procedimentos", $procedimentos);
  }
  public function atualizaradmin(){
  $procedimentos = Procedimento::all();
  return view('Procedimentos.adminatualizar')->with("procedimentos", $procedimentos);
  }
  public function deletaradmin(){
  $procedimentos = Procedimento::all();
  return view('Procedimentos.admindeletar')->with("procedimentos", $procedimentos);
  }
  public function listaroperador(){
  $procedimentos = Procedimento::all();
  return view('Procedimentos.operadorlistar')->with("procedimentos", $procedimentos);
  }
  public function atualizaroperador(){
  $procedimentos = Procedimento::all();
  return view('Procedimentos.atualizaroperador')->with("procedimentos", $procedimentos);
  }
  public function store(Request $request)
  {
     $request->request->add(['user_id'=>'1'],['created_at' => date('Y-m-d H:i:s')],['updated_at' => date('Y-m-d H:i:s')]);
      Procedimento::create($request->all());
      return view ('Procedimentos.admincadastrar');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procedimento  $procedimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedimento $procedimento)
    {
       //$request->request->update(['user_id'=>'1'],['created_at' => date('Y-m-d H:i:s')],['updated_at' => date('Y-m-d H:i:s')]);
        $procedimento->fill($request->all());
        $procedimento->save();
        //dd($request->all());
        $procedimentos = Procedimento::all();
        return view ('Procedimentos.adminatualizar')->with("procedimentos", $procedimentos);
      }
      public function destroy(Request $request, Procedimento $procedimento)
      {
         //$request->request->update(['user_id'=>'1'],['created_at' => date('Y-m-d H:i:s')],['updated_at' => date('Y-m-d H:i:s')]);
          $procedimento->fill($request->all());
          $procedimento->destroy($request->id);
          //dd($request->all());
          $procedimentos = Procedimento::all();
          return view ('Procedimentos.admindeletar')->with("procedimentos", $procedimentos);
        }
}
