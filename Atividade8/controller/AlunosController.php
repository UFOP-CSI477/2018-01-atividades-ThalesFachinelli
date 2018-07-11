<?php

namespace Controller;

use Model\Aluno;
use Model\Cidade;

class AlunosController {

  public function listar() {
    $nome=null;
    $estado_id=null;
    // Acesso ao Modelo
    $aluno = new Aluno($nome,$estado_id);

    // Manipular dados
    $lista = $aluno->all();


    // Invocar a View
    include './view/alunos/lista.php';



  }
  public function create() {

    // Carregar os dados dos Estados
    $cidades = new Cidade();
    $lista = $cidades->all();

    // Exibir a view
    include './view/alunos/create.php';
  }
  public function cadastrar($request) {
    $nome= $request['nome'];
    $rua= $request['rua'];
    $numero= $request['numero'];
    $bairro= $request['bairro'];
    $cep= $request['cep'];
    $mail= $request['mail'];
    $cidade_id = $request['cidade_id'];
    $aluno = new Aluno($nome,$cidade_id,$rua,$numero,$bairro,$cep,$mail);
    //var_dump($aluno);
    $aluno->save($aluno);
    // Invocar a View
    //include './view/exam/cadastrapac.php';
  }

}
