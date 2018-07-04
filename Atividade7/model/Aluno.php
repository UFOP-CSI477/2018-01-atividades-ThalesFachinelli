<?php

namespace Model;

use Model\Database;

class Aluno {

  protected $db = null;
  public $id=0;
  public $nome;
  public $rua;
  public $numero;
  public $bairro;
  public $cidade_id;
  public $cep;
  public $mail;

  public function __construct($nome,$cidade_id) {
    $this->db = Database::getInstance()->getDB();
    $this->id = 0;
    $this->nome = $nome;
    $this->rua=null;
    $this->numero=null;
    $this->bairro=null;
    $this->cidade_id=$cidade_id;
    $this->cep=null;
    $this->mail=null;
  }
  public function __construct2($nome,$cidade_id,$rua,$numero,$bairro,$cep,$mail) {
    $this->db = Database::getInstance()->getDB();
    $this->id = 0;
    $this->nome = $nome;
    $this->rua=$rua;
    $this->numero=$numero;
    $this->bairro=$bairro;
    $this->cidade_id=$cidade_id;
    $this->cep=$cep;
    $this->mail=$mail;
  }

  public function all() {
    $sql = "SELECT * FROM alunos ORDER BY nome";
    return $this->db->query($sql);

}
public function save($aluno) {
  $sql = $sql = "INSERT INTO alunos (nome,cidade_id,rua,numero,bairro,cep,mail)
              VALUES ('$aluno->nome','$aluno->cidade_id','$aluno->rua','$aluno->numero','$aluno->bairro','$aluno->cep','$aluno->mail')";

  //$sql2 = "INSERT INTO cidades (nome,estado_id)
                  //VALUES (:nome,:estado_id)";
  $this->db->query($sql);
  if(!$this){
    echo "Erro! Verifique os dados digitados e tente novamente.";
  }
}


}
