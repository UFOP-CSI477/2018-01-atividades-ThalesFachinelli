<?php
namespace Controller;
use Model\User;
class UsersController {
  public $login = null;
  public $password = null;
  public function cadastrar() {
    $log = null;
    $pas = null;
    // Invocar a View
    include './view/user/cadastrar.php';
  }
  public function cadastrarAdmin($request) {
    $nome = $request['login'];
    $email = $request['email'];
    $senha = $request['senha'];
    $user = new User($nome,$email,$senha);
    $user->save($user);
    // Invocar a View
    include './view/user/adminhome.php';
  }
  public function store($request) {
    $nome = $request['login'];
    $email = $request['email'];
    $senha = $request['senha'];
    $user = new User($nome,$email,$senha);
    $user->save($user);
    header('location:router.php?op=1');
  }
  public function listarTodos(){
    $nome = null;
    $email = null;
    $senha = null;
    $user = new User($nome,$email,$senha);
    $lista = $user->all();
    //var_dump($lista);
    include './view/user/listar.php';
  }
  public function validar($request){
    $nome = $request['login'];
    $email = null;
    $senha = $request['senha'];
    $user = new User($nome,$email,$senha);
    $retorno = $user->validate($nome,$senha);
    if($retorno == 1){
      include './view/user/adminhome.php';
    }
    if($retorno == 2){
      include './view/user/operadorhome.php';
    }
    if($retorno == 3){
      include './view/user/pacientehome.php';
    }else if($retorno == -1){
      echo "Usuário ou senha inválidos tente novamente.";
    }
  }
  public function viewAdmin(){
    include './view/user/adminhome.php';
  }
  public function viewPaciente(){
    include './view/user/pacientehome.php';
  }
  public function viewOperador(){
    include './view/user/operadorhome.php';
  }
  public function viewExcluir(){
    $nome = null;
    $email = null;
    $senha = null;
    $user = new User($nome,$email,$senha);
    $lista = $user->all();
    include './view/user/excluir.php';
  }
  public function excluir($request){
    $id = $request['id'];
    $email = null;
    $senha = null;
    $user = new User($id,$email,$senha);
    $lista = $user->all();
    $user->delete($id);
    include './view/user/excluir.php';
  }
  public function adminCadastrar(){
    include './view/user/cadastraadmin.php';
  }
  public function adminAtualiza(){
    $nome = null;
    $email = null;
    $senha = null;
    $user = new User($nome,$email,$senha);
    $lista = $user->all();
    include './view/user/atualizaadmin.php';
  }
  public function atualiza($request){
    $id = $request['id'];
    $nome = $request['login'];
    $email = $request['email'];
    $senha = $request['senha'];
    $user = new User($nome,$email,$senha);
    $user->atualizar($id,$nome,$email,$senha);
    $lista = $user->all();
    include './view/user/atualizaadmin.php';
  }
}
