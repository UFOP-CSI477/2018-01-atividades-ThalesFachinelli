<?php
namespace Controller;
use Model\Exame;
use Model\Procedimento;
class ExamesController {
  public function cadastrar() {
    // Invocar a View para cadastro de procedimento
    include './view/exam/cadastraradm.php';
  }
  public function cadastrarAdm($request) {
    $id = $request['id'];
    $id_procedure= $request['idp'];
    $data = $request['data'];
    $test = new Exame($id,$id_procedure,$data);
    $test->save($test);
    // Invocar a View
    include './view/exam/cadastraradm.php';
  }
  public function cadastrarviewpac(){
    $nome = null;
    $preco = null;
    $user_id = null;
    $procedimento = new Procedimento($nome,$preco,$user_id);
    $lista = $procedimento->all();
    include './view/exam/cadastrapac.php';
  }
  public function cadastrarPac($request) {
    $id = $_SESSION['id'];
    $id_procedure= $request['idp'];
    $data = $request['data'];
    $test = new Exame($id,$id_procedure,$data);
    $test->save($test);
    // Invocar a View
    include './view/exam/cadastrapac.php';
  }
  public function listarTodos(){
    $user_id = null;
    $idp=null;
    $date = null;
    $test = new Exame($user_id,$idp,$date);
    $lista = $test->all();
    //var_dump($lista);
    include './view/exam/listar.php';
  }
  public function listar(){
    $user_id = null;
    $idp=null;
    $date = null;
    $test = new Exame($user_id,$idp,$date);
    $lista = $test->all();
    //var_dump($lista);
    include './view/exam/listarsemlogin.php';
  }
  public function listaPaciente(){
    $user_id = $_SESSION['id'];
    $idp=null;
    $date = null;
    $test = new Exame($user_id,$idp,$date);
    $lista2 = $test->listaPaciente($user_id);
    $soma = $test->somaPrice($lista2);
    $lista = $test->listaPaciente($user_id);
    include './view/exam/listadopaciente.php';
  }
  public function listaOperador(){
    $user_id = null;
    $idp=null;
    $date = null;
    $test = new Exame($user_id,$idp,$date);
    $lista = $test->listaOp();
    include './view/exam/listadooperador.php';
  }
  public function viewAdmin(){
    include './view/user/adminhome.php';
  }
  public function viewPaciente(){
    include './view/user/pacientehome.php';
  }
  public function viewExcluir(){
    $id = null;
    $idp=null;
    $date = null;
    $test = new Exame($id,$idp,$date);
    $lista = $test->all();
    include './view/exam/excluir.php';
  }
  public function excluir($request){
    $id = $request['id'];
    $idp=null;
    $date = null;
    $test = new Exame($id,$idp,$date);
    $lista = $test->all();
    $test->delete($id);
    include './view/exam/excluir.php';
  }
  public function excluir2($request){
    $id = $request['id'];
    $user_id = $_SESSION['id'];
    $idp=null;
    $date = null;
    $test = new Exame($id,$idp,$date);
    $test->delete($id);
    $lista2 = $test->listaPaciente($user_id);
    $lista = $test->listaPaciente($user_id);
    include './view/exam/excluirpac.php';
  }
  public function excluirViewPac(){
    $user_id = $_SESSION['id'];
    $idp=null;
    $date = null;
    $test = new Exame($user_id,$idp,$date);
    $lista2 = $test->listaPaciente($user_id);
    $lista = $test->listaPaciente($user_id);
    include './view/exam/excluirpac.php';
  }
  public function viewCadastraradm(){
    include './view/exam/cadastraradm.php';
  }
  public function adminAtualiza(){
    $id = null;
    $idp=null;
    $date = null;
    $test = new Exame($id,$idp,$date);
    $lista = $test->all();
    include './view/exam/atualizar.php';
  }
  public function atualizaViewPac(){
    $user_id = $_SESSION['id'];
    $idp=null;
    $date = null;
    $test = new Exame($user_id,$idp,$date);
    $lista2 = $test->listaPaciente($user_id);
    $lista = $test->listaPaciente($user_id);
    include './view/exam/atualizarPac.php';
  }
  public function atualiza($request){
    $id = $request['id'];
    $idp=$request['idp'];
    $date = $request['data'];
    $test = new Exame($id,$idp,$date);
    $lista = $test->all();
    $test->atualizar($id,$idp,$date);
    //header('location:router.php?op=22');
    include './view/exam/atualizar.php';
  }
  public function atualiza2($request){
    $id = $request['id'];
    $user_id = $_SESSION['id'];
    $idp = null;
    $date = $request['data'];
    $test = new Exame($id,$idp,$date);
    $test->atualizar2($id,$date);
    $lista2 = $test->listaPaciente($user_id);
    $lista = $test->listaPaciente($user_id);
    //header('location:router.php?op=22');
    include './view/exam/atualizarPac.php';
  }
}
