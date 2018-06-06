<?php
namespace Controller;
use Model\Procedimento;
class ProcedimentosController {
  public function cadastrar() {
    // Invocar a View para cadastro de procedimento
    include './view/user/cadastrar.php';
  }
  public function cadastrarviewpac() {
    // Invocar a View para cadastro de procedimento
    $nome = null;
    $preco = null;
    $user_id = null;
    $procedimento = new Procedimento($nome,$preco,$user_id);
    $lista = $procedimento->all();
    include './view/procedure/cadastrapac.php';
  }
  public function cadastrarPac($request) {
    $nome = $request['nome'];
    $user_id = $_SESSION['id'];
    $valor = $request['valor'];
    $proc = new Procedimento($nome,$valor,$user_id);
    $proc->save($proc);
    // Invocar a View
    header('location:router.php?op=11');
  }
  public function cadastrarAdm($request) {
    $nome = $request['login'];
    $user_id = $_SESSION['id'];
    $valor = $request['valor'];
    $proc = new Procedimento($nome,$valor,$user_id);
    $proc->save($proc);
    // Invocar a View
    header('location:router.php?op=11');
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
    $preco = null;
    $user_id = null;
    $procedimento = new Procedimento($nome,$preco,$user_id);
    $lista = $procedimento->all();
    //var_dump($lista);
    include './view/procedure/listar.php';
  }
  public function listarInicial(){
    $nome = null;
    $preco = null;
    $user_id = null;
    $procedimento = new Procedimento($nome,$preco,$user_id);
    $lista = $procedimento->all();
    //var_dump($lista);
    include './view/procedure/listainicial.php';
  }
  public function viewAdmin(){
    include './view/user/adminhome.php';
  }
  public function viewExcluir(){
    $nome = null;
    $email = null;
    $senha = null;
    $user = new Procedimento($nome,$email,$senha);
    $lista = $user->all();
    include './view/procedure/excluir.php';
  }
  public function excluir($request){
    $nome = null;
    $preco = null;
    $user_id = $request['id'];
    $id = $request['id'];
    $procedimento = new Procedimento($nome,$preco,$user_id);
    $procedimento->delete($id);
    header('location:router.php?op=12');
  }
  public function viewCadastraradm(){
    include './view/procedure/cadastraradm.php';
  }
  public function adminAtualiza(){
    $nome = null;
    $preco = null;
    $user_id = null;
    $user = new Procedimento($nome,$preco,$user_id);
    $lista = $user->all();
    include './view/procedure/atualizaradm.php';
  }
  public function operadorAtualiza(){
    $nome = null;
    $preco = null;
    $user_id = null;
    $user = new Procedimento($nome,$preco,$user_id);
    $lista2 = $user->all();
    $lista = $user->all();
    include './view/procedure/atualizarop.php';
  }
  public function atualiza($request){
    $id = $request['id'];
    $nome = $request['nome'];
    $valor = $request['valor'];
    $proc = new Procedimento($nome,$valor,$id);
    $lista = $proc->atualizar($id,$nome,$valor);
    header('location:router.php?op=17');
  }
  public function atualiza2($request){
    $id = $request['id'];
    $nome = null;
    $valor = $request['valor'];
    $proc = new Procedimento($nome,$valor,$id);
    $proc->atualizar($id,$nome,$valor);
    $lista2 = $proc->all();
    $lista = $proc->all();
    include './view/procedure/atualizarop.php';
  }
}
