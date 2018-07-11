<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Procedimento;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        //
    }
    public function cadastroview(){
      return view ('Usuarios.cadastro');
    }
    public function store(Request $request)
    {
       $request->request->add(['type'=>'3'],['created_at' => date('Y-m-d H:i:s')],['updated_at' => date('Y-m-d H:i:s')]);
        Usuario::create($request->all());
        return view ('Usuarios.cadastro');
    }
    public function adminhome(){
        return view ('Usuarios.adminhome');
    }
    public function operadorhome(){
        return view ('Usuarios.operadorhome');
    }
    public function pacientehome(){
        return view ('Usuarios.pacientehome');
    }
}
